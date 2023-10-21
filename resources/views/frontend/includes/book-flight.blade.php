<div class="signup-modal">
    <div class="modal fade" id="bookFlightModal" aria-labelledby="bookFlightModalLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookFlightModalLabel">Confirm Booking</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="log-reg-form">
                        <div class="navtab-style2">
                            <div class="form-style1">
                                {!! Form::open(['route' => $module.'book-flight', 'method'=>'POST', 'class'=>'form-search position-relative flight_book']) !!}
                                    <div class="mb25">
                                        <label class="form-label fw600 dark-color">Fullname</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter fullname">
                                    </div>
                                    <div class="mb25">
                                        <label class="form-label fw600 dark-color">Phone</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
                                    </div>
                                    <div class="mb25">
                                        <label class="form-label fw600 dark-color">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                    </div>
                                    <div class="d-grid mb20">
                                        <button class="ud-btn btn-thm" type="submit">Submit <i class="fal fa-arrow-right-long"></i></button>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
