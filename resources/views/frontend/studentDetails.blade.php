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
                            @if ($student->email != null)
                            <td>
                                <form action="{{route('student.destroy', [$student->id])}}" method="post">
                                    @csrf
                                    @method('delete')
                                <a href="mailto:{{$student->email}}"><i class="fa-solid fa-envelope"></i></a> <a href="{{route('student.edit', [$student->id])}}">edit</a>
                                <button type="submit"><i class="fa-solid fa-trash text-danger"></i></button>
                            </form>


                            </td>
                            @else
                            <td>
                                <form action="{{route('student.destroy', [$student->id])}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <i class="fa-regular fa-face-frown text-danger"></i> <a href="{{route('student.edit', [$student->id])}}">edit</a>
                                    <button type="submit"><i class="fa-solid fa-trash text-danger"></i></button>
                                </form>


                            </td>
                            @endif
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
</div>

</x-template>
