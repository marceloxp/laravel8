@aware(['register'])
@props(['caption', 'roles'])

<tr>
    <td class="crud_admin_fieldcaption">{{ $caption }}</td>
    <td>
    @foreach($roles as $role)
        <span class="badge badge-primary">{{ $role->name }}</span>
    @endforeach
    </td>
</tr>
