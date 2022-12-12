<x-template>
<div class="container">
    <h1 class="text-danger">Teacher Details    </h1>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>Teacher</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($teachers as $index=>$teacher)
                        <tr>
                            <td>{{++$index}}</td>
                            <td>{{$teacher->name}}</td>
                            <td>{{$teacher->address}}</td>
                            <td><span class="badge bg-danger">{{$teacher->phone}}</span></td>
                            <td>
                            <form action="{{route('teacher.destroy', [$teacher->id])}}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{route('teacher.edit', $teacher->id)}}" class="mr-2">edit</a>
                                <button type="submit"><i class="fa-solid fa-trash text-danger"></i></button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
</div>

</x-template>
