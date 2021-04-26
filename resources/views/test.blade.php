<tbody>
    @foreach($customers as $customer)
        <tr>
            <td class="text-center">{{$loop->iteration}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->name}}</td>
            <td class="text-center">{{$customer->address}}</td>
        </tr>
    @endforeach
</tbody>