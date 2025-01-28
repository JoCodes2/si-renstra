@props(['title', 'id' ])

<tr>
    <th colspan="4" style="text-align: center; background-color: #a2e9ff; color: white; height: 40px;">
        {{ $title }}
    </th>
</tr>
<tr>
    <td colspan="4" id="{{ $id }}">
    </td>
</tr>
