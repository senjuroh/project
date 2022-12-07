<x-template>
    <div class="container">
        <form action="/student" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <x-input label="Student Name" name="name"/>
                </div>
                <div class="col-md-4">
                    <x-input label="Address" name="address"/>
                </div>
                <div class="col-md-4">
                    <x-input label="Contact" name="contact"/>
                </div>
                <div class="col-md-4">
                    <x-input label="Which Course?" name="course"/>
                </div>
                <div class="col-md-4">
                    <x-input label="Email(optional)" name="email"/>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-sm my-3">Save Record</button>
                </div>
            </div>
        </form>
    </div>
</x-template>
