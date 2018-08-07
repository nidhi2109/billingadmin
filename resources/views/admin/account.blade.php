@extends('layouts.app')

@section('content')

<div class="row heading-bg">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
	  <h5 class="txt-dark">My Account</h5>
	</div>
	<!-- Breadcrumb -->
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
	  <ol class="breadcrumb">
		<li><a href="{{ URL::to('admindashboard') }}">Dashboard</a></li>
		<li><a href="#"><span>My Account</span></a></li>
		
	  </ol>
	</div>
	<!-- /Breadcrumb -->
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-default card-view">
			<div class="panel-heading">
				<div class="pull-left">
					<h6 class="panel-title txt-dark">Manage Account</h6>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="panel-wrapper collapse in">
				<div class="panel-body">
					<div class="col-lg-4 col-md-6 col-xs-6">
						<div class="panel panel-default card-view  pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body  pa-0">
									<div class="profile-box">
										<div class="profile-cover-pic">
											<div class="profile-image-overlay"></div>
										</div>
										<div class="profile-info text-center">
											<div class="profile-img-wrap">
												<img class="inline-block mb-10" src="{{ asset('public/img/mock1.jpg') }}" alt="user">
											</div>
											<h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-orange">{{ $account['userName'] }}</h5>
											<h6 class="block capitalize-font pb-20">{{ $account['companyName'] }}</h6>
										</div>
										<div class="social-info">
											<div class="row">
												<div class="col-xs-4 text-center">
													<span class="counts block head-font"><span class="counter-anim">Email</span></span>
													<span class="counts-text block">post</span>
												</div>
												<div class="col-xs-4 text-center">
													<span class="counts block head-font"><span class="counter-anim">246</span></span>
													<span class="counts-text block">followers</span>
												</div>
												<div class="col-xs-4 text-center">
													<span class="counts block head-font"><span class="counter-anim">898</span></span>
													<span class="counts-text block">tweets</span>
												</div>
											</div>
											<button class="btn btn-warning btn-block btn-anim mt-30" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i><span class="btn-text">Edit Password</span></button>
											<div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content col-lg-8">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
															<h5 class="modal-title" id="myModalLabel">Edit Password</h5>
														</div>
														<div class="modal-body">
															<!-- Row -->
															<div class="row">
																<div class="col-lg-12">
																	<div class="">
																		<div class="panel-wrapper collapse in">
																			<div class="panel-body pa-0">
																				<div class="col-sm-12 col-xs-12">
																					<div class="form-wrap">
																						<form action="#" method="post">
																							<div class="form-body overflow-hide">
																								<div class="form-group">
																									<label class="control-label mb-6" for="password">Current Password</label>
																									<div class="input-group">
																										<div class="input-group-addon"><i class="icon-user"></i></div>
																										<input type="password" name="password" id="password" class="form-control required" placeholder="current password" required >
																									</div>
																								</div>

																								<div class="form-group">
																									<label class="control-label mb-6" for="new_password">New Password</label>
																									<div class="input-group">
																										<div class="input-group-addon"><i class="icon-lock"></i></div>
																										<input type="password" name="new_password" class="form-control required"  id="new_password" placeholder="Enter new password" required>
																									</div>
																								</div>

																								<div class="form-group">
																									<label class="control-label mb-6" for="confirm_password">Confirm Password</label>
																									<div class="input-group">
																										<div class="input-group-addon"><i class="icon-lock"></i></div>
																										<input type="password" name="confirm_password" class="form-control required"  id="confirm_password" placeholder="Enter confirm password" required>
																									</div>
																								</div>

																							</div>

																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<button type="submit" class="btn btn-success waves-effect">Save</button>
															<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
														</div>
                                                        </form>
													</div>
													<!-- /.modal-content -->
												</div>
												<!-- /.modal-dialog -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-lg-6">
                        <form action="#" method="post">
                            <div class="form-wrap">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="userId">userId</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="icon-user"></i></div>
                                            <input type="text" value="{{ $account['userId'] }}" name="userId" class="form-control" id="userId" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="userName">Login Name</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="icon-user"></i></div>
                                            <input type="text" name="userName" value="{{ $account['userName'] }}" class="form-control" id="userName" placeholder="willard bryant" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="status">Status</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="icon-user"></i></div>
                                            <select name="status" class="form-control" id="status">
                                                <option value="{{ $account['status'] }}">{{ $account['status'] }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="language">Language</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="icon-globe"></i></div>
                                            <select name="language" class="form-control" id="language">
                                                <option value="{{ $account['language'] }}">{{ $account['language'] }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="role">Role</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="icon-user"></i></div>
                                            <select name="role" class="form-control" id="role">
                                                <option value="{{ $account['role'] }}">{{ $account['role'] }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="contact_type">Contact Type</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="icon-user"></i></div>
                                            <select name="contact_type" class="form-control" id="contact_type">
                                                <option value="primary" selected>primary</option>
                                                <option value="secondary">secondary</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="organizationName">Organization Name</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="icon-user"></i></div>
                                            <input type="text" name="organizationName" value="{{ $account['contact']['organizationName'] }}" class="form-control" id="organizationName" placeholder="organization name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="firstName">First Name</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="icon-user"></i></div>
                                            <input type="text" name="firstName" value="{{ $account['contact']['firstName'] }}" class="form-control" id="firstName" placeholder="willard bryant">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="lastName">Last Name</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="icon-user"></i></div>
                                            <input type="text" name="lastName" value="{{ $account['contact']['lastName'] }}" class="form-control" id="lastName" placeholder="willard bryant">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="phoneNumber">Phone Number</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="icon-phone"></i></div>
                                            <input type="text" name="phoneNumber" value="{{ $account['contact']['phoneNumber'] }}" class="form-control" id="phoneNumber" placeholder="phone number">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="email">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                            <input type="text" name="email" id="email" placeholder="email" value="{{ $account['contact']['email'] }}" class="form-control" >
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="address1">Address</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                            <input type="text" name="address1" id="address1" placeholder="address1" value="{{ $account['contact']['address1'] }}" class="form-control" >
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="address2">Address2</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                            <input type="text" name="address2" id="address2" placeholder="address2" value="{{ $account['contact']['address2'] }}" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="city">city</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                            <input type="text" name="city" id="city" placeholder="city" value="{{ $account['contact']['city'] }}" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="stateProvince">State/Province</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="icon-globe"></i></div>
                                            <input type="text" name="stateProvince" id="stateProvince" placeholder="state/Province" value="{{ $account['contact']['stateProvince'] }}" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="postalCode">Zip/Postal Code</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="icon-globe"></i></div>
                                            <input type="text" name="postalCode" id="postalCode" placeholder="Zip/Postal Code" value="{{ $account['contact']['postalCode'] }}" class="form-control" >
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="countryCode">Country</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="icon-globe-alt"></i></div>
                                            <select name="countryCode" class="form-control" id="countryCode">
                                                    <option value="IN" selected="selected">India</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10"> &nbsp;</label>
                                        <div class="checkbox checkbox-primary">
                                            <input name="include" id="include" type="checkbox" @if($account['contact']['include'] != "false") checked @endif>
                                            <label for="include">
                                                Include in Notifications
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions mt-10 text-right">
                                    <button type="submit" class="btn btn-success mr-10 mb-30">Update profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
				</div>
			</div>
		</div>
	</div>						
</div>
@stop