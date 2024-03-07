@aware(['register'])
@props(['caption', 'src'])

<tr>
    <td class="crud_admin_fieldcaption">{{ $caption }}</td>
    <td>
        <x-image-uploaded-file class="image_uploaded_file" :filename="$src" noimage="/img/admin/user-no-image.png"/>
    </td>
</tr>
