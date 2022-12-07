<x-template>
    <div class="container">
        <h1>Edit Student</h1>
        <form action="/student/{{$student->id}}" method="post">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-4">
                    <x-input label="Student Name" name="name" value="{{$student->name}}"/>
                </div>
                <div class="col-md-4">
                    <x-input label="Address" name="address" value="{{$student->address}}"/>
                </div>
                <div class="col-md-4">
                    <x-input label="Contact" name="contact" value="{{$student->contact}}"/>
                </div>
                <div class="col-md-4">
                    <x-input label="Which Course?" name="course" value="{{$student->course}}"/>
                </div>
                <div class="col-md-4">
                    <x-input label="Email(optional)" name="email" value="{{$student->email}}"/>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-sm my-3">Update Record</button>
                </div>
            </div>
        </form>
    </div>
</x-template>
