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
                            <td><a href="{{route('teacher.edit', $teacher->id)}}">edit</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
</div>

</x-template>
