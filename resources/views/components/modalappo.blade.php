<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close d-flex align-items-center justify-content-center"
                    data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            
            <div class="row ">
                <div class="col-md-6 d-flex">
                    <div class="modal-body d-flex text-center d-flex align-items-center">
                        <div class="text w-100">
                            <div class="icon">
                                <img src={{ asset('assets/img/appo.png') }} class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="modal-body d-flex align-items-center">
                        <div class="text w-100">
                            <h3 class="mb-1">Create Your Appointment</h3>
                            <form action="/appointment" class="signup-form" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Full Name</label>
                                    <input name="name" type="text" class="form-control" placeholder="John Doe">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="email">Email Address</label>
                                    <input name="email" type="text" class="form-control"
                                        placeholder="johndoe@gmail.com">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="phone">No Phone</label>
                                    <input name="phone" type="text" class="form-control" placeholder="123-456-7890">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="doctor_id">Choose a Doctor:</label>
                                    <select name="doctor_id" id="doctor_id" class="form-select"
                                        aria-label="Default select example">
                                        @foreach ($doctors as $doctor)
                                        <option value="{{$doctor->id}}" selected>{{ $doctor->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="date">Date</label>
                                    <input name="date" type="date" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="time">Time</label>
                                    <input name="time" type="time" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="form-control btn btn-primary rounded submit px-3 text-white">
                                        Make Appointment
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>