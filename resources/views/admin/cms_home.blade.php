@extends('admin.common.default')

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                {{-- /////////////// Service /////////////////// --}}
                <div class="col-lg-12 mb-5">
                    <div class="card">

                        <div class="card-header" style="background-color: #3498db;">
                            <h3 class="card-title badge badge-success font-weight-bold ">Services</h3>
                        </div>
                        <!-- /.card-header -->

                        <form id="aboutForm" action="{{ route('post_cms_home') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf


                            <input type="hidden" name="id" value="{{ $items['services']['id'] }}" />

                            <div class="card-body row">

                                <div class="form-group col-md-12">
                                    <label for="head_title">Head Title</label>
                                    <textarea id="head_title1" name="head_title" class="form-control" rows="5">{{ $items['services']['head_title'] }}</textarea>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="content">Details</label>
                                    <textarea id="content1" name="content" class="form-control" rows="5">{{ $items['services']['content'] }}</textarea>
                                </div>


                                <div class="form-group col-md-6">
                                    <label for="image">Image 1</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile" name="image_1"
                                                id="image_1_service" accept="image/png, image/jpg, image/jpeg, image/webp">
                                        </label>

                                        <div class="profile_image">
                                            @if ($items['services']['image_1'])
                                                <img class="profile_img" id="thumbnail_show_image_1_service"
                                                    src="{{ $items['services']['image_1'] }}" width="148px" height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_1_service"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="image">Icon 1</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile"
                                                name="about_badge_icon1" id="about_badge_icon1"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">
                                        </label>

                                        <div class="profile_image">
                                            @if ($items['services']['about_badge_icon1'])
                                                <img class="profile_img" id="thumbnail_show_image_1_service_icon"
                                                    style="background-color: green;"
                                                    src="{{ $items['services']['about_badge_icon1'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_1_service_icon"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="image_1_text_1">Image 1 Text 1</label>
                                    <textarea id="image_1_text_1_1" name="image_1_text_1" class="form-control" rows="5">{{ $items['services']['image_1_text_1'] }}</textarea>

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="image_1_text_2">Image 1 Text 2</label>
                                    <textarea id="image_1_text_2_1" name="image_1_text_2" class="form-control" rows="5">{{ $items['services']['image_1_text_2'] }}</textarea>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="image">Image 2</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile" name="image_2"
                                                id="image_2_service" accept="image/png, image/jpg, image/jpeg, image/webp">


                                        </label>

                                        <div class="profile_image">

                                            @if ($items['services']['image_2'])
                                                <img class="profile_img" id="thumbnail_show_image_2_service"
                                                    src="{{ $items['services']['image_2'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_2_service"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="image">Icon 2</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile"
                                                name="about_badge_icon2" id="about_badge_icon2"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">
                                        </label>

                                        <div class="profile_image">
                                            @if ($items['services']['about_badge_icon2'])
                                                <img class="profile_img" style="background-color: green;"
                                                    id="thumbnail_show_image_2_service_icon"
                                                    src="{{ $items['services']['about_badge_icon2'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_2_service_icon"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="image_2_text_1">Image 2 Text 1</label>
                                    <textarea id="image_2_text_1_1" name="image_2_text_1" class="form-control" rows="5">{{ $items['services']['image_2_text_1'] }}</textarea>

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="image_2_text_2">Image 2 Text 2</label>
                                    <textarea id="image_2_text_2_1" name="image_2_text_2" class="form-control" rows="5">{{ $items['services']['image_2_text_2'] }}</textarea>
                                </div>


                                <div class="form-group col-md-6">
                                    <label for="image">Image 3</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile" name="image_3"
                                                id="image_3_service"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">


                                        </label>

                                        <div class="profile_image">

                                            @if ($items['services']['image_3'])
                                                <img class="profile_img" id="thumbnail_show_image_3_service"
                                                    src="{{ $items['services']['image_3'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_3_service"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="image">Icon 3</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile"
                                                name="about_badge_icon3" id="about_badge_icon3"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">
                                        </label>

                                        <div class="profile_image">
                                            @if ($items['services']['about_badge_icon3'])
                                                <img class="profile_img" id="thumbnail_show_image_3_service_icon"
                                                    style="background-color: green;"
                                                    src="{{ $items['services']['about_badge_icon3'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_3_service_icon"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="image_3_text_1">Image 3 Text 1</label>
                                    <textarea id="image_3_text_1_1" name="image_3_text_1" class="form-control" rows="5">{{ $items['services']['image_3_text_1'] }}</textarea>

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="image_3_text_2">Image 3 Text 2</label>
                                    <textarea id="image_3_text_2_1" name="image_3_text_2" class="form-control" rows="5">{{ $items['services']['image_3_text_2'] }}</textarea>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="image">Image 4</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile" name="image_4"
                                                id="image_4_service"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">


                                        </label>

                                        <div class="profile_image">

                                            @if ($items['services']['image_4'])
                                                <img class="profile_img" id="thumbnail_show_image_4_service"
                                                    src="{{ $items['services']['image_4'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_4_service"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="image">Icon 4</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile"
                                                name="about_badge_icon4" id="about_badge_icon4"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">
                                        </label>

                                        <div class="profile_image">
                                            @if ($items['services']['about_badge_icon4'])
                                                <img class="profile_img" style="background-color: green;"
                                                    id="thumbnail_show_image_4_service_icon"
                                                    src="{{ $items['services']['about_badge_icon4'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_4_service_icon"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="image_4_text_1">Image 4 Text 1</label>
                                    <textarea id="image_4_text_1_1" name="image_4_text_1" class="form-control" rows="5">{{ $items['services']['image_4_text_1'] }}</textarea>

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="image_1_text_2">Image 4 Text 2</label>
                                    <textarea id="image_1_text_2_1" name="image_4_text_2" class="form-control" rows="5">{{ $items['services']['image_4_text_2'] }}</textarea>
                                </div>



                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- /////////////// about /////////////////// --}}
                <div class="col-lg-12 mb-5">
                    <div class="card">

                        <div class="card-header" style="background-color: #3498db;">
                            <h3 class="card-title badge badge-success font-weight-bold ">About</h3>
                        </div>
                        <!-- /.card-header -->

                        <form id="aboutForm" action="{{ route('post_cms_home') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf


                            <input type="hidden" name="id" value="{{ $items['about']['id'] }}" />

                            <div class="card-body row">

                                <div class="form-group col-md-12">
                                    <label for="head_title">Head Title</label>
                                    <textarea id="about_head_title1" name="head_title" class="form-control" rows="5">{{ $items['about']['head_title'] }}</textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="content">Title 2</label>
                                    <textarea id="about_title_1" name="title_1" class="form-control" rows="5">{{ $items['about']['title_1'] }}</textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="content">Details</label>
                                    <textarea id="about_content1" name="content" class="form-control" rows="5">{{ $items['about']['content'] }}</textarea>
                                </div>


                                <div class="form-group col-md-6">
                                    <label for="image">Image 1</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile" name="image_1"
                                                id="image_1_about" accept="image/png, image/jpg, image/jpeg, image/webp">
                                        </label>

                                        <div class="profile_image">
                                            @if ($items['about']['image_1'])
                                                <img class="profile_img" id="thumbnail_show_image_1_about"
                                                    src="{{ $items['about']['image_1'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_1_about"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group col-md-6">
                                    <label for="image">Image 2</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile" name="image_2"
                                                id="image_2_about" accept="image/png, image/jpg, image/jpeg, image/webp">


                                        </label>

                                        <div class="profile_image">

                                            @if ($items['about']['image_2'])
                                                <img class="profile_img" id="thumbnail_show_image_2_about"
                                                    src="{{ $items['about']['image_2'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_2_about"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>


                {{-- /////////////// Different Industry Section /////////////////// --}}
                <div class="col-lg-12 mb-5">
                    <div class="card">

                        <div class="card-header" style="background-color: #3498db;">
                            <h3 class="card-title badge badge-success font-weight-bold ">Industry Section</h3>
                        </div>
                        <!-- /.card-header -->

                        <form id="aboutForm" action="{{ route('post_cms_home') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf


                            <input type="hidden" name="id" value="{{ $items['industry']['id'] }}" />

                            <div class="card-body row">

                                <div class="form-group col-md-12">
                                    <label for="head_title">Head Title</label>
                                    <textarea id="industry_head_title1" name="head_title" class="form-control" rows="5">{{ $items['industry']['head_title'] }}</textarea>
                                </div>




                                <div class="form-group col-md-6">
                                    <label for="image">Image 1</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile" name="image_1"
                                                id="image_1_industry"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">
                                        </label>

                                        <div class="profile_image">
                                            @if ($items['industry']['image_1'])
                                                <img class="profile_img" id="thumbnail_show_image_1_industry"
                                                    src="{{ $items['industry']['image_1'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_1_industry"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group col-md-12">
                                    <label for="image_1_text_1">Image 1 Text 1</label>
                                    <textarea id="industry_image_1_text_1_1" name="image_1_text_1" class="form-control" rows="5">{{ $items['industry']['image_1_text_1'] }}</textarea>

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="image_1_text_2">Image 1 Text 2</label>
                                    <textarea id="industry_image_1_text_2_1" name="image_1_text_2" class="form-control" rows="5">{{ $items['industry']['image_1_text_2'] }}</textarea>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="image">Image 2</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile" name="image_2"
                                                id="image_2_industry"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">


                                        </label>

                                        <div class="profile_image">

                                            @if ($items['industry']['image_2'])
                                                <img class="profile_img" id="thumbnail_show_image_2_industry"
                                                    src="{{ $items['industry']['image_2'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_2_industry"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group col-md-12">
                                    <label for="image_2_text_1">Image 2 Text 1</label>
                                    <textarea id="industry_image_2_text_1_1" name="image_2_text_1" class="form-control" rows="5">{{ $items['industry']['image_2_text_1'] }}</textarea>

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="image_2_text_2">Image 2 Text 2</label>
                                    <textarea id="industry_image_2_text_2_1" name="image_2_text_2" class="form-control" rows="5">{{ $items['industry']['image_2_text_2'] }}</textarea>
                                </div>


                                <div class="form-group col-md-6">
                                    <label for="image">Image 3</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile" name="image_3"
                                                id="image_3_industry"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">


                                        </label>

                                        <div class="profile_image">

                                            @if ($items['industry']['image_3'])
                                                <img class="profile_img" id="thumbnail_show_image_3_industry"
                                                    src="{{ $items['industry']['image_3'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_3_industry"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group col-md-12">
                                    <label for="image_3_text_1">Image 3 Text 1</label>
                                    <textarea id="industry_image_3_text_1_1" name="image_3_text_1" class="form-control" rows="5">{{ $items['industry']['image_3_text_1'] }}</textarea>

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="image_3_text_2">Image 3 Text 2</label>
                                    <textarea id="industry_image_3_text_2_1" name="image_3_text_2" class="form-control" rows="5">{{ $items['industry']['image_3_text_2'] }}</textarea>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="image">Image 4</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile" name="image_4"
                                                id="image_4_industry"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">


                                        </label>

                                        <div class="profile_image">

                                            @if ($items['industry']['image_4'])
                                                <img class="profile_img" id="thumbnail_show_image_4_industry"
                                                    src="{{ $items['industry']['image_4'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_4_industry"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group col-md-12">
                                    <label for="image_4_text_1">Image 4 Text 1</label>
                                    <textarea id="industry_image_4_text_1_1" name="image_4_text_1" class="form-control" rows="5">{{ $items['industry']['image_4_text_1'] }}</textarea>

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="image_1_text_2">Image 4 Text 2</label>
                                    <textarea id="industry_image_1_text_2_1" name="image_4_text_2" class="form-control" rows="5">{{ $items['industry']['image_4_text_2'] }}</textarea>
                                </div>



                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>


                {{-- /////////////// how it work section /////////////////// --}}
              
                 <div class="col-lg-12 mb-5">
                    <div class="card">

                        <div class="card-header" style="background-color: #3498db;">
                            <h3 class="card-title badge badge-success font-weight-bold ">How it Work</h3>
                        </div>
                        <!-- /.card-header -->

                        <form id="aboutForm" action="{{ route('post_cms_home') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf


                            <input type="hidden" name="id" value="{{ $items['work']['id'] }}" />

                            <div class="card-body row">

                                <div class="form-group col-md-12">
                                    <label for="head_title">Head Title</label>
                                    <textarea id="work_head_title1" name="head_title" class="form-control" rows="5">{{ $items['work']['head_title'] }}</textarea>
                                </div>




                                <div class="form-group col-md-6">
                                    <label for="image">Image 1</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile" name="image_1"
                                                id="image_1_work"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">
                                        </label>

                                        <div class="profile_image">
                                            @if ($items['work']['image_1'])
                                                <img class="profile_img" id="thumbnail_show_image_1_work"
                                                    src="{{ $items['work']['image_1'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_1_work"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group col-md-12">
                                    <label for="image_1_text_1">Image 1 Text 1</label>
                                    <textarea id="work_image_1_text_1_1" name="image_1_text_1" class="form-control" rows="5">{{ $items['work']['image_1_text_1'] }}</textarea>

                                </div>                              

                                <div class="form-group col-md-6">
                                    <label for="image">Image 2</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile" name="image_2"
                                                id="image_2_work"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">


                                        </label>

                                        <div class="profile_image">

                                            @if ($items['work']['image_2'])
                                                <img class="profile_img" id="thumbnail_show_image_2_work"
                                                    src="{{ $items['work']['image_2'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_2_work"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group col-md-12">
                                    <label for="image_2_text_1">Image 2 Text 1</label>
                                    <textarea id="work_image_2_text_1_1" name="image_2_text_1" class="form-control" rows="5">{{ $items['work']['image_2_text_1'] }}</textarea>

                                </div>

                                


                                <div class="form-group col-md-6">
                                    <label for="image">Image 3</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile" name="image_3"
                                                id="image_3_work"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">


                                        </label>

                                        <div class="profile_image">

                                            @if ($items['work']['image_3'])
                                                <img class="profile_img" id="thumbnail_show_image_3_work"
                                                    src="{{ $items['work']['image_3'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_3_work"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group col-md-12">
                                    <label for="image_3_text_1">Image 3 Text 1</label>
                                    <textarea id="work_image_3_text_1_1" name="image_3_text_1" class="form-control" rows="5">{{ $items['work']['image_3_text_1'] }}</textarea>

                                </div>

                              

                                <div class="form-group col-md-6">
                                    <label for="image">Image 4</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile" name="image_4"
                                                id="image_4_work"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">


                                        </label>

                                        <div class="profile_image">

                                            @if ($items['work']['image_4'])
                                                <img class="profile_img" id="thumbnail_show_image_4_work"
                                                    src="{{ $items['work']['image_4'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_4_work"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="image_4_text_1">Image 4 Text 1</label>
                                    <textarea id="work_image_4_text_1_1" name="image_4_text_1" class="form-control" rows="5">{{ $items['work']['image_4_text_1'] }}</textarea>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="image">Image 5</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile"
                                                name="about_badge_icon1" id="image_5_work"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">
                                        </label>

                                        <div class="profile_image">
                                            @if ($items['work']['about_badge_icon1'])
                                                <img class="profile_img" id="thumbnail_show_image_5_work"
                                                    
                                                    src="{{ $items['work']['about_badge_icon1'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_5_work"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="image_3_text_1">Image 5 Text 1</label>
                                    <textarea id="work_image_5_text_1_1" name="badge_1_text" class="form-control" rows="5">{{ $items['work']['badge_1_text'] }}</textarea>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="image">Image 6</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile"
                                                name="about_badge_icon2" id="image_6_work"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">
                                        </label>

                                        <div class="profile_image">
                                            @if ($items['work']['about_badge_icon2'])
                                                <img class="profile_img" id="thumbnail_show_image_6_work"
                                                   
                                                    src="{{ $items['work']['about_badge_icon2'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_6_work"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="image_3_text_1">Image 6 Text 1</label>
                                    <textarea id="work_image_6_text_1_1" name="badge_2_text" class="form-control" rows="5">{{ $items['work']['badge_2_text'] }}</textarea>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="image">Image 7</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile"
                                                name="about_badge_icon3" id="image_7_work"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">
                                        </label>

                                        <div class="profile_image">
                                            @if ($items['work']['about_badge_icon3'])
                                                <img class="profile_img" id="thumbnail_show_image_7_work"
                                                    
                                                    src="{{ $items['work']['about_badge_icon3'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_7_work"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="image_3_text_1">Image 7 Text 1</label>
                                    <textarea id="work_image_7_text_1_1" name="badge_3_text" class="form-control" rows="5">{{ $items['work']['badge_3_text'] }}</textarea>

                                </div>


                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- /////////////// market_section /////////////////// --}}
                <div class="col-lg-12 mb-5">
                    <div class="card">

                        <div class="card-header" style="background-color: #3498db;">
                            <h3 class="card-title badge badge-success font-weight-bold ">Market Section</h3>
                        </div>
                        <!-- /.card-header -->

                        <form id="info_sectionForm" action="{{ route('post_cms_home') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $items['market']['id'] }}" />

                            <div class="card-body row">

                                <div class="form-group col-md-12">
                                    <label for="title_1_4">Title</label>
                                    <textarea id="title_1_4" name="title_1" class="form-control" rows="5">{{ $items['market']['title_1'] }}</textarea>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="content_4">Details</label>
                                    <textarea id="content_4" name="content" class="form-control" rows="5">{{ $items['market']['content'] }}</textarea>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="image_1_4_info_section">Image 1</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control uploadFile" name="image_1"
                                                id="image_1_4_info_section"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">
                                        </label>

                                        <div class="profile_image">
                                            @if ($items['market']['image_1'])
                                                <img class="profile_img" id="thumbnail_show_image_1_4_info_section"
                                                    src="{{ $items['market']['image_1'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_1_4_info_section"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="image">Icon 1</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile"
                                                name="about_badge_icon1" id="image_1_market"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">
                                        </label>

                                        <div class="profile_image">
                                            @if ($items['market']['about_badge_icon1'])
                                                <img class="profile_img" id="thumbnail_show_image_1_market"
                                                    style="background-color: green"
                                                    src="{{ $items['market']['about_badge_icon1'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_1_market"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="image_3_text_1">Icon 1 Text 1</label>
                                    <textarea id="market_image_1_text_1_1" name="badge_1_text" class="form-control" rows="5">{{ $items['market']['badge_1_text'] }}</textarea>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="image">Icon 2</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile"
                                                name="about_badge_icon2" id="image_2_market"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">
                                        </label>

                                        <div class="profile_image">
                                            @if ($items['market']['about_badge_icon2'])
                                                <img class="profile_img" id="thumbnail_show_image_2_market"
                                                   style="background-color: green"
                                                    src="{{ $items['market']['about_badge_icon2'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_2_market"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="image_3_text_1">Icon 2 Text 1</label>
                                    <textarea id="market_image_2_text_1_1" name="badge_2_text" class="form-control" rows="5">{{ $items['market']['badge_2_text'] }}</textarea>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="image">Icon 3</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile"
                                                name="about_badge_icon3" id="image_3_market"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">
                                        </label>

                                        <div class="profile_image">
                                            @if ($items['market']['about_badge_icon3'])
                                                <img class="profile_img" id="thumbnail_show_image_3_market"
                                                    style="background-color: green"
                                                    src="{{ $items['market']['about_badge_icon3'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_3_market"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="image_3_text_1">Icon 3 Text 1</label>
                                    <textarea id="market_image_3_text_1_1" name="badge_3_text" class="form-control" rows="5">{{ $items['market']['badge_3_text'] }}</textarea>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="image">Icon 4</label>

                                    <div class="admin_upload">
                                        <label class="admin-upload-wrap">
                                            <input type="file" class="form-control mt-3 uploadFile"
                                                name="about_badge_icon4" id="image_4_market"
                                                accept="image/png, image/jpg, image/jpeg, image/webp">
                                        </label>

                                        <div class="profile_image">
                                            @if ($items['market']['about_badge_icon4'])
                                                <img class="profile_img" id="thumbnail_show_image_4_market"
                                                    style="background-color: green"
                                                    src="{{ $items['market']['about_badge_icon4'] }}" width="148px"
                                                    height="221px">
                                            @else
                                                <img class="profile_img" id="thumbnail_show_image_4_market"
                                                    src="{{ asset('asset/images/default_image.png') }}" width="148px"
                                                    height="221px">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="image_3_text_1">Icon 4 Text 1</label>
                                    <textarea id="market_image_4_text_1_1" name="badge_4_text" class="form-control" rows="5">{{ $items['market']['badge_4_text'] }}</textarea>

                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

                  {{-- /////////////// Testimonials /////////////////// --}}
                <div class="col-lg-12 mb-5">
                    <div class="card">

                        <div class="card-header" style="background-color: #3498db;">
                            <h3 class="card-title badge badge-success font-weight-bold">Testimonials</h3>
                        </div>
                        <!-- /.card-header -->

                        <form id="testimonials_form" action="{{ route('post_cms_home') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $items['testimonials']['id'] }}" />

                            <div class="card-body row">

                                <div class="form-group col-md-12">
                                    <label for="head_title">Head Title</label>
                                    <textarea id="head_title2" name="head_title" class="form-control" rows="5">{{ $items['testimonials']['head_title'] }}</textarea>
                                </div>


                                <div class="form-group col-md-12">
                                    <label for="title_1">Title</label>
                                    <textarea id="title_1_2" name="title_1" class="form-control" rows="5">{{ $items['testimonials']['title_1'] }}</textarea>
                                </div>
                               


                                <div class="form-group col-md-12">
                                   
                                    <button type="button" class="btn btn-primary mb-3" id="addInput">Add Field</button>

                                    <div id="inputContainer">
                                        @if (count($items['testimonials']['badge_data']) > 0)
                                            @foreach ($items['testimonials']['badge_data'] as $item)
                                                <div class="row multi_choice_sections">

                                                    {{-- Category ID --}}
                                                    <input type="hidden" value="{{ $item['id'] }}"
                                                        name="badge_id[]" />


                                                    {{-- Client Name --}}
                                                    <div class="form-group col-md-4">
                                                        <input type="text"
                                                            class="form-control text-input badge_text_1_{{ $item['id'] }}"
                                                            name="old_badge_text_1[]" value="{{ $item['badge_text_1'] }}"
                                                            placeholder="Client Name">
                                                    </div>


                                                   


                                                    {{-- Client Message --}}
                                                    <div class="form-group col-md-4">
                                                        <textarea name="old_badge_details_1[]" class="form-control badge_details_1_{{ $item['id'] }}" rows="5"
                                                            placeholder="Client Message">{{ $item['badge_details_1'] }}</textarea>
                                                    </div>


                                                   
                                                    {{-- Client Image --}}
                                                    <div class="form-group col-md-4">
                                                        <label for="badge_image_1_{{ $item['id'] }}">Client
                                                            Image</label>
                                                        <input type="file"
                                                            class="form-control file-input badge_image_1_{{ $item['id'] }}"
                                                            name="old_badge_image_1[]" placeholder="Category Image"
                                                            accept="image/png, image/jpg, image/jpeg, image/webp">

                                                        @if ($item['badge_image_1'])
                                                            <img src="{{ asset($item['badge_image_1']) }}" alt=""
                                                                width="464.8px" height="456.4px" class="mt-3" />
                                                        @endif
                                                    </div>

                                                    {{-- Category Action Button --}}
                                                    <div class="form-group col-md-4">

                                                        <button type="button" class="btn btn-info mb-3 updateInput"
                                                            data-badge-id="{{ $item['id'] }}">Update</button>

                                                        <button type="button" class="btn btn-danger mb-3 removeInput"
                                                            data-badge-id="{{ $item['id'] }}">Remove</button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="row multi_choice_sections">
                                                <input type="hidden" value="" name="badge_id[]" />


                                                {{-- Client Name --}}
                                                <div class="form-group col-md-4">
                                                    <input type="text" class="form-control text-input"
                                                        name="badge_text_1[]" placeholder="Client Name">
                                                </div>


                                                {{-- Client Message --}}
                                                <div class="form-group col-md-4">
                                                    <textarea name="badge_details_1[]" class="form-control" rows="5" placeholder="Client Message"></textarea>
                                                </div>

                                               

                                                {{-- Client Image --}}
                                                <div class="form-group col-md-4">
                                                    <label for="badge_image_1">Client Image</label>
                                                    <input type="file" class="form-control file-input"
                                                        name="badge_image_1[]" placeholder="Client Image"
                                                        accept="image/png, image/jpg, image/jpeg, image/webp">
                                                </div>

                                                {{-- Category Action Button --}}
                                                <div class="form-group col-md-4">
                                                    <button type="button"
                                                        class="btn btn-danger mb-3 removeInput">Remove</button>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>



            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection


@section('script_content')
    <script>
        $(document).ready(function() {


            ////////// Summernote /////////////
            $("#head_title1").summernote({
                height: 100,
            });
            $("#content1").summernote({
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear', 'strikethrough']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph', 'lineHeight']], // Include lineHeight here
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                    ['height', ['height']]


                ]
            });
            $("#image_1_text_1_1").summernote({
                height: 100,
            });
            $("#image_1_text_2_1").summernote({
                height: 100,
            });
            $("#image_2_text_1_1").summernote({
                height: 100,
            });
            $("#image_2_text_2_1").summernote({
                height: 100,
            });
            $("#image_3_text_1_1").summernote({
                height: 100,
            });
            $("#image_3_text_2_1").summernote({
                height: 100,
            });
            $("#image_4_text_1_1").summernote({
                height: 100,
            });
            $("#image_4_text_2_1").summernote({
                height: 100,
            });

            $("#industry_image_1_text_1_1").summernote({
                height: 100,
            });
            $("#industry_image_1_text_2_1").summernote({
                height: 100,
            });
            $("#industry_image_2_text_1_1").summernote({
                height: 100,
            });
            $("#industry_image_2_text_2_1").summernote({
                height: 100,
            });
            $("#industry_image_3_text_1_1").summernote({
                height: 100,
            });
            $("#industry_image_3_text_2_1").summernote({
                height: 100,
            });
            $("#industry_image_4_text_1_1").summernote({
                height: 100,
            });
            $("#industry_image_4_text_2_1").summernote({
                height: 100,
            });

              $("#work_image_1_text_1_1").summernote({
                height: 100,
            });
              $("#work_image_2_text_1_1").summernote({
                height: 100,
            });
              $("#work_image_3_text_1_1").summernote({
                height: 100,
            });
              $("#work_image_4_text_1_1").summernote({
                height: 100,
            });
              $("#work_image_5_text_1_1").summernote({
                height: 100,
            });
              $("#work_image_6_text_1_1").summernote({
                height: 100,
            });
              $("#work_image_7_text_1_1").summernote({
                height: 100,
            });
             $("#market_image_1_text_1_1").summernote({
                height: 100,
            });
             $("#market_image_2_text_1_1").summernote({
                height: 100,
            });
             $("#market_image_3_text_1_1").summernote({
                height: 100,
            });
             $("#market_image_4_text_1_1").summernote({
                height: 100,
            });

            $("#industry_head_title1").summernote({
                height: 100,
            });
            $("#about_head_title1").summernote({
                height: 100,
            });
            $("#about_title_1").summernote({
                height: 100,
            });
            $("#about_content1").summernote({
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear', 'strikethrough']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph', 'lineHeight']], // Include lineHeight here
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                    ['height', ['height']]


                ]
            });


            $("#head_title2").summernote({
                height: 100,
            });
            $("#title_1_2").summernote({
                height: 100,
            });
            $("#content2").summernote({
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear', 'strikethrough']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph', 'lineHeight']], // Include lineHeight here
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                    ['height', ['height']]


                ]
            });



            $("#content3").summernote({
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear', 'strikethrough']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph', 'lineHeight']], // Include lineHeight here
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                    ['height', ['height']]


                ]
            });
            $("#title_1_3").summernote({
                height: 100,
            });


            $("#title_1_4").summernote({
                height: 100,
            });
            $("#content_4").summernote({
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear', 'strikethrough']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph', 'lineHeight']], // Include lineHeight here
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                    ['height', ['height']]


                ]
            });





            /////////////////// preview image ///////////////////

            $('#image_1_service').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_1_service').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_1_service').attr('src', '/asset/images/default_image.png');

                }


            })

            $('#image_2_service').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_2_service').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_2_service').attr('src', '/asset/images/default_image.png');

                }


            })

            $('#image_3_service').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_3_service').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_3_service').attr('src', '/asset/images/default_image.png');

                }


            })

            $('#image_4_service').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_4_service').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_4_service').attr('src', '/asset/images/default_image.png');

                }


            })

            $('#image_1_about').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_1_about').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_1_about').attr('src', '/asset/images/default_image.png');

                }


            })


            $('#image_2_about').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_2_about').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_2_about').attr('src', '/asset/images/default_image.png');

                }


            })
            $('#about_badge_icon1').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_1_service_icon').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_1_service_icon').attr('src',
                    '/asset/images/default_image.png');

                }


            })
            $('#about_badge_icon2').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_2_service_icon').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_2_service_icon').attr('src',
                    '/asset/images/default_image.png');

                }


            })

            $('#about_badge_icon3').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_3_service_icon').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_3_service_icon').attr('src',
                    '/asset/images/default_image.png');

                }


            })
            $('#about_badge_icon4').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_4_service_icon').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_4_service_icon').attr('src',
                    '/asset/images/default_image.png');

                }


            })


            $('#image_1_industry').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_1_industry').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_1_industry').attr('src', '/asset/images/default_image.png');

                }


            })

            $('#image_2_industry').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_2_industry').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_2_industry').attr('src', '/asset/images/default_image.png');

                }


            })

            $('#image_3_industry').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_3_industry').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_3_industry').attr('src', '/asset/images/default_image.png');

                }


            })

            $('#image_4_industry').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_4_industry').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_4_industry').attr('src', '/asset/images/default_image.png');

                }


            })

            $('#image_1_work').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_1_work').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_1_work').attr('src', '/asset/images/default_image.png');

                }


            })

            $('#image_2_work').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_2_work').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_2_work').attr('src', '/asset/images/default_image.png');

                }


            })

            $('#image_3_work').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_3_work').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_3_work').attr('src', '/asset/images/default_image.png');

                }


            })

            $('#image_4_work').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_4_work').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_4_work').attr('src', '/asset/images/default_image.png');

                }


            })
            $('#image_5_work').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_5_work').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_5_work').attr('src', '/asset/images/default_image.png');

                }


            })
            $('#image_6_work').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_6_work').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_6_work').attr('src', '/asset/images/default_image.png');

                }


            })
            $('#image_7_work').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_7_work').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_7_work').attr('src', '/asset/images/default_image.png');

                }


            })

            

           

            $("#image_1_4_info_section").on("change", function() {
                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_1_4_info_section').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_1_4_info_section').attr('src',
                        '/asset/images/default_image.png');

                }
            })
             $('#image_1_market').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_1_market').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_1_market').attr('src', '/asset/images/default_image.png');

                }


            })
            $('#image_2_market').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_2_market').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_2_market').attr('src', '/asset/images/default_image.png');

                }


            })
            $('#image_3_market').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_3_market').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_3_market').attr('src', '/asset/images/default_image.png');

                }


            })
            $('#image_4_market').on('change', function() {

                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg" ||
                        ext == 'webp')) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#thumbnail_show_image_4_market').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#jquery_form_error_msg").text("");

                } else {

                    $('#thumbnail_show_image_4_market').attr('src', '/asset/images/default_image.png');

                }


            })
            ///////////////// end preview image  ////////////////////


            /////////////////// preview video ///////////////////////
            function videoUrlConvertToEmbedUrl(url) {
                // YouTube
                if (url.includes('youtube.com') || url.includes('youtu.be')) {
                    const match = url.match(/(?:v=|\/)([0-9A-Za-z_-]{11})/);
                    if (match && match[1]) {
                        return `https://www.youtube.com/embed/${match[1]}`;
                    }
                }

                // Vimeo
                if (url.includes('vimeo.com')) {
                    const match = url.match(/vimeo\.com\/(\d+)/);
                    if (match && match[1]) {
                        return `https://player.vimeo.com/video/${match[1]}`;
                    }
                }

                // Facebook (basic embed support)
                if (url.includes('facebook.com')) {
                    return `https://www.facebook.com/plugins/video.php?href=${encodeURIComponent(url)}&show_text=0&width=560`;
                }

                return null;
            }

            $("#video_1_type_3").on("change", function() {
                const value = $(this).val();
                if (value) {

                    $("#video_1_3").val("");
                    $("#videoPlayerContainer_3_video_section").html("");

                    const videoUrlType = "{{ $items['video_section']['video_1_type'] }}";
                    const videoUrl = "{{ $items['video_section']['video_1'] }}";

                    if (value == videoUrlType) {
                        if (videoUrl) {
                            $("#video_1_3").val(videoUrl);
                            $("#videoPlayerContainer_3_video_section").html(`
                        <iframe src="${videoUrl}" width="560" height="315" frameborder="0" allowfullscreen></iframe>
                        `);
                        }
                    }


                    $("#video_1_3_container").show();
                } else {

                    $("#video_1_3").val("");
                    $("#videoPlayerContainer_3_video_section").html("");

                    $("#video_1_3_container").hide();
                }

            });

            $('#video_1_3').on('change', function() {
                const inputUrl = $(this).val().trim();
                const embedUrl = videoUrlConvertToEmbedUrl(inputUrl);

                if (inputUrl == "") {
                    $('#videoPlayerContainer_3_video_section').html("");
                    return;
                }

                if (!embedUrl) {
                    $('#videoPlayerContainer_3_video_section').html(
                        '<p style="color:red;">Unsupported video URL</p>');
                    return;
                }

                $('#videoPlayerContainer_3_video_section').html(`
                    <iframe src="${embedUrl}" width="560" height="315" frameborder="0" allowfullscreen></iframe>
                `);

                $('#video_1_3').val(embedUrl);
            });
            /////////////////// end preview video ///////////////////



            ////////////// form validation ////////////////////////
            $('#aboutForm').validate({
                rules: {
                    head_title: {
                        required: true,
                    },
                    content: {
                        required: true
                    },
                    image_1_text_1: {
                        required: true
                    },
                    image_1_text_2: {
                        required: true
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
                submitHandler: function(form, event) {
                    event.preventDefault();
                    form.submit();
                }
            });

            $('#testimonials_form').validate({
                rules: {
                    head_title: {
                        required: true,
                    },
                    title_1: {
                        required: false
                    },
                    content: {
                        required: true
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
                submitHandler: function(form, event) {
                    // event.preventDefault();


                    /////////// dynamic text validate /////////////
                    var isValid = true;
                    $('#inputContainer input[type="text"]').each(function() {
                        if ($(this).val() == '') {
                            isValid = false;
                            $(this).addClass('is-invalid');
                        } else {
                            $(this).removeClass('is-invalid');
                        }
                    });

                    ///////// dynamic textarea validate /////////////
                    $('#inputContainer textarea').each(function() {
                        if ($(this).val() == '') {
                            isValid = false;
                            $(this).addClass('is-invalid');
                        } else {
                            $(this).removeClass('is-invalid');
                        }
                    });


                    ///////// dynamic file validate /////////////
                    // $('#inputContainer input[type="file"]').each(function() {
                    //     if ($(this).val() == '') {
                    //         isValid = false;
                    //         $(this).addClass('is-invalid');
                    //     } else {
                    //         $(this).removeClass('is-invalid');
                    //     }
                    // });





                    if (!isValid) {
                        event.preventDefault();
                        return false;
                    }


                    // $('.text-input, .file-input').each(function() {
                    //     console.log($(this).val())
                    // });


                    // console.log($("#testimonials").serializeArray())
                    // event.preventDefault();

                    form.submit();
                    // alert(1);
                }
            });

            $('#video_sectionForm').validate({
                rules: {
                    title_1: {
                        required: true,
                    },
                    content: {
                        required: true
                    },
                    video_1_type: {
                        required: true,
                    },
                    video_1: {
                        required: true
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
                submitHandler: function(form, event) {
                    event.preventDefault();
                    form.submit();
                }
            });

            $('#info_section').validate({
                rules: {
                    title_1: {
                        required: true,
                    },
                    content: {
                        required: false
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
                submitHandler: function(form, event) {
                    event.preventDefault();
                    form.submit();
                }
            });
            ////////////// end form validation ////////////////////



            /////////////////////////



            ///////////////// dynamic add more fields (testimonials) ////////////////////////////////
            var pre_badge_count = "{{ count($items['testimonials']['badge_data']) }}";
            var badge_fields_current_length = (Number(pre_badge_count) != 0) ? Number(pre_badge_count) : 1;
            const badge_fields_max_length = 16;

            if (badge_fields_current_length >= badge_fields_max_length) {
                $("#addInput").hide();
            }

            // Add input field
            $('#addInput').click(function() {

                // alert(badge_fields_current_length)

                if (badge_fields_current_length >= badge_fields_max_length) {
                    $("#addInput").hide();
                    return false;
                }

                $('#inputContainer').append(`
                    <div class="row multi_choice_sections">
                        <input type="hidden" value="" name="badge_id[]" />

                        <div class="form-group col-md-4">
                            <input type="text" class="form-control text-input"
                                name="badge_text_1[]" placeholder="Client Name">
                        </div>

                      

                        <div class="form-group col-md-4">
                            <textarea name="badge_details_1[]" class="form-control" rows="5" placeholder="Client Message"></textarea>
                        </div>

                        

                        <div class="form-group col-md-4">
                            <label for="badge_image_1">Client Image</label>
                            <input type="file" class="form-control file-input"
                                name="badge_image_1[]" placeholder="Client Image"
                                accept="image/png, image/jpg, image/jpeg, image/webp">
                        </div>

                        <div class="form-group col-md-4">
                            <button type="button"
                                class="btn btn-danger mb-3 removeInput">Remove</button>
                        </div>


                    </div>
                `);

                badge_fields_current_length += 1;
                if (badge_fields_current_length >= badge_fields_max_length) {
                    $("#addInput").hide();
                }
            });

            // Remove input field
            $('#inputContainer').on('click', '.removeInput', function() {

                const current_pointer = $(this);

                var badge_id = $(current_pointer).attr("data-badge-id");
                if (badge_id != undefined) {
                    // alert(badge_id);

                    Swal.fire({
                        title: "Do you want to delete?",
                        showCancelButton: true,
                        confirmButtonText: "Yes",
                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {


                            let url = "{{ route('post_badge_delete') }}";


                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                                },
                                url: `${url}`,
                                method: "POST",
                                contentType: "application/json; charset=utf-8",
                                traditional: true,
                                data: JSON.stringify({
                                    id: badge_id
                                }),
                                success: function(response) {
                                    console.log(response);

                                    $(current_pointer).closest('.row').remove();
                                    badge_fields_current_length -= 1;
                                    $("#addInput").show();
                                },
                                error: function(error) {
                                    console.log("error" + error);
                                }
                            });



                        }
                    });


                } else {

                    $(current_pointer).closest('.row').remove();
                    badge_fields_current_length -= 1;
                    $("#addInput").show();

                }
            });


            // Update input field
            $('#inputContainer').on('click', '.updateInput', function() {

                const current_pointer = $(this);
                var badge_id = $(current_pointer).attr("data-badge-id");
                var badge_text_1 = $(`.badge_text_1_${badge_id}`).val() || "";
                var badge_text_2 = $(`.badge_text_2_${badge_id}`).val() || "";
                var badge_file_1 = $(`.badge_file_1_${badge_id}`)[0]?.files?.[0] ?? "";
                var badge_file_2 = $(`.badge_file_2_${badge_id}`)[0]?.files?.[0] ?? "";
                var badge_icon_1 = $(`.badge_icon_1_${badge_id}`)[0]?.files?.[0] ?? "";
                var badge_image_1 = $(`.badge_image_1_${badge_id}`)[0]?.files?.[0] ?? "";
                var badge_title_1 = $(`.badge_title_1_${badge_id}`).val() || "";
                var badge_details_1 = $(`.badge_details_1_${badge_id}`).val() || "";



                var formData = new FormData();
                formData.append('badge_id', badge_id);

                // if (badge_file != undefined) {
                //     formData.append('badge_file', badge_file);
                // }

                if (badge_text_1 != undefined && badge_text_1 != "") {
                    formData.append('badge_text_1', badge_text_1);
                }
                if (badge_text_2 != undefined && badge_text_2 != "") {
                    formData.append('badge_text_2', badge_text_2);
                }
                if (badge_file_1 != undefined && badge_file_1 != "") {
                    formData.append('badge_file_1', badge_file_1);
                }
                if (badge_file_2 != undefined && badge_file_2 != "") {
                    formData.append('badge_file_2', badge_file_2);
                }
                if (badge_icon_1 != undefined && badge_icon_1 != "") {
                    formData.append('badge_icon_1', badge_icon_1);
                }
                if (badge_image_1 != undefined && badge_image_1 != "") {
                    formData.append('badge_image_1', badge_image_1);
                }
                if (badge_title_1 != undefined && badge_title_1 != "") {
                    formData.append('badge_title_1', badge_title_1);
                }
                if (badge_details_1 != undefined && badge_details_1 != "") {
                    formData.append('badge_details_1', badge_details_1);
                }

                let url = "{{ route('post_badge_update') }}";

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    url: url,
                    method: "POST",
                    processData: false,
                    contentType: false,
                    data: formData,
                    success: function(response) {
                        console.log(response);
                        window.location.reload();
                    },
                    error: function(error) {
                        console.log("error" + error);
                    }
                });

            });
            ///////////////// End dynamic add more fields (testimonials) ////////////////////////////






            /////// delete about right image ///////
            $(document).on('click', '.del_about_right_img', function() {

                const current_pointer = $(this);

                var ID = $(current_pointer).attr("data-id");
                var FIELD_NAME = $(current_pointer).attr("data-field-name");

                Swal.fire({
                    title: "Do you want to delete?",
                    showCancelButton: true,
                    confirmButtonText: "Yes",
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {


                        let url = "{{ route('post_about_right_img_delete') }}";


                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': "{{ csrf_token() }}"
                            },
                            url: `${url}`,
                            method: "POST",
                            contentType: "application/json; charset=utf-8",
                            traditional: true,
                            data: JSON.stringify({
                                id: ID,
                                field_name: FIELD_NAME
                            }),
                            success: function(response) {
                                console.log(response);

                                window.location.reload();
                            },
                            error: function(error) {
                                console.log("error" + error);
                            }
                        });

                    }
                });

            });


            /////// delete My Expertise badge image ///////
            $(document).on('click', '.del_badge_img', function() {

                const current_pointer = $(this);

                var ID = $(current_pointer).attr("data-id");
                var FIELD_NAME = $(current_pointer).attr("data-field-name");

                Swal.fire({
                    title: "Do you want to delete?",
                    showCancelButton: true,
                    confirmButtonText: "Yes",
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {


                        let url = "{{ route('post_del_badge_img') }}";


                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': "{{ csrf_token() }}"
                            },
                            url: `${url}`,
                            method: "POST",
                            contentType: "application/json; charset=utf-8",
                            traditional: true,
                            data: JSON.stringify({
                                id: ID,
                                field_name: FIELD_NAME
                            }),
                            success: function(response) {
                                console.log(response);

                                window.location.reload();
                            },
                            error: function(error) {
                                console.log("error" + error);
                            }
                        });

                    }
                });

            });


        })
    </script>
@endsection
