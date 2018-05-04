@foreach ($images as $image)
        <div class="work-item {{ $image->category->name }} image-work-item" data-src="http://magdaaudifred.local/image-manager/public/storage/{{ $image->path }}" data-sub-html="{{ $image->name }}">
            @if($image->active)
                <i class="fa fa-tag tag-price"></i>
            @endif
            <a href="#">
                <img src="http://magdaaudifred.local/image-manager/public/storage/{{ $image->path }}" alt="{{ $image->name }}">

                <div class="work-caption font-alt">
                    <h3 class="work-title">{{ $image->name }} </h3>
                    <div class="work-descr">{{ $image->category->name }} </div>
                </div>
            </a>
        </div>

        @if($image->active)
            <button type="button" class="btn btn-sm m-t-20 btn-contact" data-toggle="modal" data-target="#exampleModal">
                IM INTERESTED!
            </button>
        @endif
@endforeach

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Contact me!</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('interested_mail') }}">
                    {{ csrf_token() }}
                    <div class="row">
                        <div class="col-md-10">
                            <label for="contact-form-name">Name:* </label>
                            <input type="text" id="contact-form-name" name="name" class="form-control" required>
                        </div>

                        <div class="col-md-10">
                            <label for="contact-form-email">Email:* </label>
                            <input type="email" id="contact-form-email" name="email" class="form-control" required>
                        </div>

                        <div class="col-md-10 form-group">
                            <label for="contact-form-phone" class="control-label">Phone: </label>
                            <input type="text" id="contact-form-phone" name="phone" class="form-control">
                        </div>

                        <div class="col-md-10 form-group">
                            <label for="contact-form-comments" class="control-label">Comments: </label>
                            <textarea id="contact-form-comments" name="comments" class="form-control" rows="8"></textarea>
                        </div>
                    </div>

                    <small class="text-danger">* required fields</small>

                    <div class="modal-footer">
                        <div class="text-left">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>