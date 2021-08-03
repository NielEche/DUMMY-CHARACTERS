

<div class="modal fade stick-up" id="addprojectimages" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"><br>
            <div class="modal-header clearfix text-left">
                <h5>Add<span class="semi-bold">Images </span></h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('editimages.store') }}" method="POST" enctype="multipart/form-data"
                    name="projectImages" id="projectImages">
                    @csrf
                    @method('POST')

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label> Name</label>
                                <input type="text" name="name" placeholder="name"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Project id</label>
                                <input type="text" name="project_id" value="{{$id}}" placeholder="{{$id}}"
                                    class="form-control" readonly required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Image</label>
                                <input type="file" id="file_path1" name="file_path1" accept="image/*"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                        </div>
                        <div class="col-md-4 m-t-10 sm-m-t-10">
                            <button type="submit" name="submit" id="submit" value="submit"
                                class="btn btn-primary btn-block m-t-5">Save</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

