
@extends('backend.layouts.main')	
@section('main-container')
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Add New Package</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Add NEw Package</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->

                


       
		<div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h5>Add New Package</h5>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <form class="my-2 p-2">
							<div id="smartwizard">
								<ul class="nav">
								   <li>
									   <a class="nav-link" href="#step-1">
										  Basic Information
									   </a>
								   </li>
								   <li>
									   <a class="nav-link" href="#step-2">
										  Overview
									   </a>
								   </li>
								   <li>
									   <a class="nav-link" href="#step-3">
										  Discriptiion
									   </a>
								   </li>
								   <li>
									   <a class="nav-link" href="#step-4">
										  Itinerary
									   </a>
								   </li>
								   <li>
										<a class="nav-link" href="#step-5">
										Gallery
										</a>
									</li>
									<li>
										<a class="nav-link" href="#step-6">
										FAQ's
										</a>
									</li>
									<li>
										<a class="nav-link" href="#step-7">
										Overview
										</a>
									</li>
								</ul>
							 
								<div class="tab-content">
								   <div id="step-1" class="tab-pane" role="tabpanel">
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="title">Paxckage Title</label>
											<input type="text" class="form-control" name="title" id="title" placeholder="Title">
										</div>
										
										<div class="form-group col-md-6">
											<label for="price">Package Price</label>
											<input type="number" class="form-control" name="price" id="price" placeholder="Price in $">
										</div>
										
										<div class="form-group col-md-6">
											<label for="location">Location</label>
											<input type="text" class="form-control" name="location" id="location" placeholder="location">
										</div>
									</div>
								   </div>
								   <div id="step-2" class="tab-pane" role="tabpanel">
									 <div class="form-row">
										<div class="form-group col-md-6">
											<label for="duration">Package Duration</label>
											<input type="text" class="form-control" name="duration" id="duration" placeholder="Duration">
										</div>
										<div class="form-group col-md-6">
											<label for="inputPassword4">Package Lavel</label>
											<select name="lavel" id="lavel" class="form-control">
												<option value="" selected disabled>Select Level</option>
												<option value="easy">Easy</option>
												<option value="hard">Moderate</option>
												<option value="hard">Hard</option>
											</select>
										</div>
										<div class="form-group col-md-6">
											<label for="duration">Max Elevation</label>
											<input type="text" class="form-control" name="Elevation" id="Elevation" placeholder="Max Elevation">
										</div>
										<div class="form-group col-md-6">
											<label for="gsize">Group Size</label>
											<input type="text" class="form-control" name="gsize" id="gsize" placeholder="Group Size">
										</div>
										<div class="form-group col-md-6">
											<label for="transportation">Transportation</label>
											<input type="text" class="form-control" name="transportation" id="transportation" placeholder="Transportation">
										</div>
										<div class="form-group col-md-6">
											<label for="accomodation">Accomodation</label>
											<input type="text" class="form-control" name="accomodation" id="accomodation" placeholder="Accomodation">
										</div>
										<div class="form-group col-md-6">
											<label for="meals">Meals</label>
											<input type="text" class="form-control" name="meals" id="meals" placeholder="Meals">
										</div>
										<div class="form-group col-md-6">
											<label for="startsAt">Starts At</label>
											<input type="text" class="form-control" name="startsAt" id="startsAt" placeholder="Starts At">
										</div>
										<div class="form-group col-md-6">
											<label for="endsAt">Ends At</label>
											<input type="text" class="form-control" name="endsAt" id="endsAt" placeholder="Ends At">
										</div>

									 </div>
								   </div>
								   <div id="step-3" class="tab-pane" role="tabpanel">
									<div class="form-row">
										<div class="form-group col-md-10 mr-auto">
											<label for="highlight">Highlights</label>
											<input type="text" name="highlight" id="highlight" placeholder="Highlight" class="form-control">
										</div>
										<div class="colmd-2">
											<label for="">Add Highlight to list</label><br>
											<button class="btn btn-primary">Add Highlights</button>
										</div>
									</div>
									<div class="form-row">
										<div class="col-12">
											<label for="">Highlights List</label>
										</div>
										<div class="col-12">
											<ol>
												<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, cupiditate.</li>
												<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, cupiditate.</li>
												<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, cupiditate.</li>
											</ol>
										</div>
									</div>
									<div class="form-group col-md-12">
										<label for="discription">Discription</label>
										<textarea id="discription"  name="discription"  class="form-control" rows="6"></textarea>
									</div>
								   </div>
								   <div id="step-4" class="tab-pane" role="tabpanel">
										
										<div class="form-group ">
											<label for="title">Itinerary Title</label>
											<input type="text" class="form-control" name="title" id="title" placeholder="Title">
										</div>
										<div class="form-group ">
											<label for="iticont">Itinerary Discription</label>
											<textarea id="iticont"  name="iticont"  class="form-control" rows="6"></textarea>
										</div>
										<button class="btn btn-primary">Add Itinerary</button>
										<div class="row">
											<div class="col-sm-12">
												<h5 class="mb-3">Itinerary List</h5>
												<hr>
												<div class="accordion" id="accordionExample">
													<div class="card mb-0">
														<div class="card-header" id="headingOne">
															<h5 class="mb-0"><a href="#!" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">#Day 1 At Kathmandu</a></h5>
														</div>
														<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
															<div class="card-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
																eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
																sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
																sustainable VHS.
															</div>
														</div>
													</div>
													
													<div class="card mb-0">
														<div class="card-header" id="headingTwo">
															<h5 class="mb-0"><a href="#!" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">#Day 1 At Kathmandu</a></h5>
														</div>
														<div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
															<div class="card-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
																eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
																sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
																sustainable VHS.
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										

								   </div>
								   <div id="step-5" class="tab-pane" role="tabpanel">
									
									<div class="row">
										<div class="col-6">
											<p class="text-danger">Add maximum 6 photos</p>
										</div>
										<div class="col-6 text-right">
											<button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#exampleModalLive">Add Photo</button>
										</div>
									</div>
									<div class="row card-body">
										<!-- item -->
										<div class=' col-lg-2 col-md-3 col-6 photo  p-2'>
											<img class='' src='{{ url('backend/assets/images/light-box/l1.jpg')}}' alt='Image From RED Academy.'>
											<div class='card-img-overlay row align-content-end'>
												<div class='col-6 text-center'>
													<button class='btn btn-sm btn-warning border-0 show-btn' title='Edit Album' data-toggle="modal" data-target=".bd-example-modal-lg" data-id="{{ url('backend/assets/images/light-box/l1.jpg')}}"><i class="far fa-eye"></i></button>
												</div>
												<div class='col-6 text-center'>
													<button class='btn btn-sm btn-danger delete-btn border-0' title='Delete' data-toggle='modal' data-target='#deleteItemModal' data-id='{$row["photo_id"]}'><i class='far fa-trash-alt'></i></button>
												</div>
				
											</div>
										</div>
										<!-- item -->
										<div class=' col-lg-2 col-md-3 col-6 photo  p-2'>
											<img class='' src='{{url('backend/assets/images/light-box/l2.jpg')}}' alt='Image From RED Academy.'>
											<div class='card-img-overlay row align-content-end'>
												<div class='col-6 text-center'>
													<button class='btn btn-sm btn-warning border-0 show-btn' title='Edit Album' data-toggle="modal" data-target=".bd-example-modal-lg" data-id="{{ url('backend/assets/images/light-box/l1.jpg')}}"><i class="far fa-eye"></i></button>
												</div>
												<div class='col-6 text-center'>
													<button class='btn btn-sm btn-danger delete-btn border-0' title='Delete' data-toggle='modal' data-target='#deleteItemModal' data-id='{$row["photo_id"]}'><i class='far fa-trash-alt'></i></button>
												</div>
				
											</div>
										</div>
										<!-- item -->
										<div class=' col-lg-2 col-md-3 col-6 photo  p-2'>
											<img class='' src='{{url('backend/assets/images/light-box/l3.jpg')}}' alt='Image From RED Academy.'>
											<div class='card-img-overlay row align-content-end'>
												<div class='col-6 text-center'>
													<button class='btn btn-sm btn-warning border-0 show-btn' title='Edit Album' data-toggle="modal" data-target=".bd-example-modal-lg" data-id="{{ url('backend/assets/images/light-box/l1.jpg')}}"><i class="far fa-eye"></i></button>
												</div>
												<div class='col-6 text-center'>
													<button class='btn btn-sm btn-danger delete-btn border-0' title='Delete' data-toggle='modal' data-target='#deleteItemModal' data-id='{$row["photo_id"]}'><i class='far fa-trash-alt'></i></button>
												</div>
				
											</div>
										</div>


									</div>
									</div>
									<div id="step-6" class="tab-pane" role="tabpanel">
										<div class="form-group ">
											<label for="question">Frequently Asked Question</label>
											<input type="text" class="form-control" name="question" id="question" placeholder="Enter Question">
										</div>
										<div class="form-group ">
											<label for="answer">Answer</label>
											<textarea id="answer"  name="answer"  class="form-control" rows="6" placeholder="Enter Answer"></textarea>
										</div>
										<button class="btn btn-primary">Add FAQ</button>
										<div class="row mt-4">
											<div class="col-sm-12">
												<h5 class="mb-3">FAQ's List</h5>
												<hr>
												<div class="accordion" id="accordionExample">
													<div class="card mb-0">
														<div class="card-header" id="headingOne">
															<h5 class="mb-0"><a href="#!" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">#Why this s the best package</a></h5>
														</div>
														<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
															<div class="card-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
																eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
																sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
																sustainable VHS.
															</div>
														</div>
													</div>
													<div class="card mb-0">
														<div class="card-header" id="headingTwo">
															<h5 class="mb-0"><a href="#!" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">#how much money</a></h5>
														</div>
														<div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
															<div class="card-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
																eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
																sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
																sustainable VHS.
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div id="step-7" class="tab-pane" role="tabpanel">
										Overview
									</div>
								</div>
							</div>
                        </form>
                    </div>
                </div>
            </div>
		</div>   


        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<!-- add new photo -->

<div id="exampleModalLive" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLiveLabel">Add New Photo.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="">
            <div class="modal-body">
                <label for="title">Photo Title</label>
                <input type="text" placeholder="Enter Photo name." class="form-control" id="title" name="title">
                <label for="title">Choose Photo</label>
                <input type="file"  class="form-control" name="photo" id="photo">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn  btn-primary">Add  New Photo</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- Delete Modal start-->
<div id="deleteItemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLiveLabel">Conformation!!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p class="mb-0">Are you sure, you want to delete this Photo!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn  btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
  <!-- Delete Modal End-->
  <!-- show modal start -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog"  role="document">
      <div class="modal-content preview_photo_close  rounded-0">
          <button type="button" class="close preview_photo_close_btn" data-dismiss="modal" aria-label="Close">
              <i class="fas fa-times"></i>
            </button>
          <img src="" id="showing_photo" alt="">
      </div>
    </div>
  </div>
  <!-- show modal end -->
@endsection

@section('scripts')
<!-- step wizard -->

<script>
	$(document).ready(function() {
		// summernote
		$('#discription').summernote({
		placeholder: 'Discription.',
		height: 300,
		});
		$('#iticont').summernote({
		placeholder: 'Discription.',
		height: 200,
		});
		// photo showing
		$(document).on("click",".show-btn", function(){
			var itemId = $(this).data("id");
			$("#showing_photo").attr("src", itemId);
			console.log(itemId);
		});
	})
	</script>
@endsection