<?php

namespace App\Services\Admin;

/**
 * Class AdminProcessUploads.
 */
class AdminProcessUploads
{
    public static function handle($request, $form)
    {
        try {
            foreach ($request->files as $field_name => $file) {
                $file = $form[$field_name];

                if (!$file->isValid()) {
                    $messages = ['Ocorreu um erro no envio da imagem.'];

                    switch ($file->getError()) {
                        case UPLOAD_ERR_INI_SIZE:
                            $messages[] = sprintf('O tamanho do arquivo excede o limite permitido pelo servidor (%s).', ini_get('upload_max_filesize'));
                            break;
                        case UPLOAD_ERR_FORM_SIZE:
                            $messages[] = 'O tamanho do arquivo excede o limite permitido pelo formulário.';
                            break;
                        case UPLOAD_ERR_PARTIAL:
                            $messages[] = 'O upload do arquivo foi feito parcialmente.';
                            break;
                        case UPLOAD_ERR_NO_FILE:
                            $messages[] = 'Nenhum arquivo foi enviado.';
                            break;
                        case UPLOAD_ERR_NO_TMP_DIR:
                            $messages[] = 'Não há pasta temporária definida.';
                            break;
                        case UPLOAD_ERR_CANT_WRITE:
                            $messages[] = 'Falha em escrever o arquivo em disco.';
                            break;
                        case UPLOAD_ERR_EXTENSION:
                            $messages[] = 'Uma extensão do PHP interrompeu o upload do arquivo.';
                            break;
                    }

                    throw new \Exception(implode(' ', $messages));
                }

                $extension = $file->getClientOriginalExtension();

                switch ($extension) {
                    case 'pdf':
                        $disk_name  = 'upload_pdfs';
                        break;
                    default:
                        $disk_name  = 'upload_images';
                        break;
                }

                $file_name  = $file->getClientOriginalName();
                $check_file = disk_new_file_name($disk_name, $file_name);
                $saved_file = $request->file($field_name)->storeAs('', $check_file, ['disk' => $disk_name]);

                if (!$saved_file) {
                    throw new \Exception('Ocorreu um erro ao salvar o arquivo.');
                }

                $form[$field_name] = $saved_file;
            }

            return $form;
        } catch (\Exception $e) {
            report($e);
            throw new \Exception($e->getMessage());
        }
    }
}
