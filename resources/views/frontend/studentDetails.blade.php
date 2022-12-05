<x-template>
<div class="container">
    <h1 class="text-danger">Student Details    </h1>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>Student</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>course</th>
                        <th>Email</th>
                    </tr>
                    @foreach ($students as $index=>$student)
                        <tr>
                            <td>{{++$index}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->address}}</td>
                            <td><span class="badge bg-danger">{{$student->contact}}</span></td>
                            <td>{{$student->course}}</td>
                            <td>{{$student->email ?? 'N/A'}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
</div>

</x-template>
