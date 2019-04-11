<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $user['first_name'] ?> <?php echo $user['last_name']; ?>'s Collections (@<?php echo $user['username'] ?>) | Unsplash Photo Community</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/styleEdit.css">
	<link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/favicon-black.ico">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="display: -webkit-inline-box; padding-top: 10px;">
                    <img class="logo-header" src="<?php echo base_url(); ?>/assets/img/logo-black.svg" alt="logo" style="padding-top:5px;"/>
                <div class="col-lg-8">
                    <!-- <input type="text" placeholder="Search free high-resolution photos" class="form-control" name="search"
                    style=" padding-left:30px; 
                            margin: 0; 
                            padding-top: 10px;
                            padding-bottom: 10px; 
                            padding-right: 0; 
                            border-radius:25px;
                            font-size: 14px;
                            height: 40px;
                            width: 1270px;"> -->
                </div>
                <div class="col-sm-2" style="margin:0; padding:0; max-width: 350px;">
                    <ul style="padding-left:15px; display: inline-flex;" class="menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Collections</a></li>
                        <li><a href="#">Explore</a></li>
                    </ul>
                    <button class="fas fa-ellipsis-h btn" type="button" data-toggle="dropdown" style="margin-left:10px;"></button>
                    <ul class="dropdown-menu" style="background-color: black;">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Wallpapers</a></li>
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Made with Unsplash</a></li>
                        <li><a href="#">API/Developers</a></li>
                        <li><a href="#">Hiring</a></li>
                        <li><a href="#">Licence</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
                <div class="col-lg-2" style="display: inline;">
                    <button style="margin-left:10px;" class="submitPhoto btn btn-light" type="submit" data-toggle="modal" data-target="#exampleModalCenter">Submit a Photo</button>
                    <button style="margin-left:10px;" class="fas fa-bell btn" style="color: #ADADAD;"></button>
                    <a href="#"><img src="<?php echo base_url(); ?>/assets/img/avatar-account.jpg" style="border-radius:25px; margin-left:10px;"></a>
                </div>
            </div>
            
        </div>
    </div>
    <div class="wrapper">
        <div class="container" id="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3" style="margin-top: 100px;">
                    <ul id="menu">
                        <h4>Account Settings</h4>
                        <li class="active"><a href="#">Edit Profile</li>
                        <li><a href="#">Manage Photos</a></li>
                        <li><a href="#">Email Settings</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="#">Connect Accounts</a></li>
                        <li><a href="#">Applications</a></li>
                        <li><a href="#">Close Account</a></li>   
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-9" id="menu" style="margin-top: 100px;">
                    <h4>Edit Profile</h4>
                    <div class="form">
                        <form class="edit_user" id="edit_user_2590255" action="/account" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="_method" value="put" /><input type="hidden" name="authenticity_token" value="3KIY999SGvZz6haih6yMRym0whQXsMLW7bzkBjockSlsjty2NDbySnMiqdNZJMCjSfq0UE1EFXMHenpcaJhq9A==" />
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 text-center">
                                    <a href="#" class="upload-circular-container profile-image-container js-general-uploader-pseudo-file-field">
                                    <div class="upload-circular">
                                        <img src="<?php echo base_url(); ?>assets/img/avatar-account-lg.jpg" style="border-radius:100px;"/>
                                        <div class="upload-circular__progress js-general-uploader-progress-target">
                                        </div> <!-- close .__progress -->
                                    </div> <!-- close .upload-circular -->

                                    <p class="text-center zeta js-edit-profile-image-trigger-text">Change profile image</p>
                                    </a> <!-- close .js -->

                                    <div class="user-badges text-left">
                                        <label>Badge</label>
                                            <div class="user-badges-container">
                                                <p class="zeta no-badge-message text-secondary">
                                                    You don't have any badges yet :(
                                                </p>

                                                <ul class="user-badges-list user-badges-list--hidden js-other-badges"></ul>
                                            </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-8">
                                    <div class="form-group">
                                        <label for="user_first_name">First name</label>
                                        <input class="form-control" type="text" value="Ahmad Habib" name="user[first_name]" id="user_first_name" />
                                    </div> <!-- close .form-group -->

                                    <div class="form-group">
                                        <label for="user_last_name">Last name</label>
                                        <input class="form-control" type="text" value="Fitriansyah" name="user[last_name]" id="user_last_name" />
                                    </div> <!-- close .form-group -->

                                    <div class="form-group">
                                        <label for="user_email">Email address</label>
                                        <input class="form-control" type="email" value="id.ahmadhabib@gmail.com" name="user[email]" id="user_email" />
                                    </div> <!-- close .form-group -->
                                </div> <!-- close .col -->
                            </div> <!-- close .row -->

                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <div class="form-group">
                                        <label for="user_username">
                                            Username <span class="text-secondary">(only letters, numbers, and underscores)</span>
                                        </label>
                                        <input class="form-control" type="text" value="ahmadhabib" name="user[username]" id="user_username" />
                                        <div class="help-block text-secondary">
                                            <p>https://unsplash.com/@<strong>ahmadhabib</strong></p>
                                        </div> <!-- close .help-block -->
                                    </div> <!-- close .form-group -->
                                </div> <!-- close .col -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="user_url">Personal site/portfolio</label>
                                        <input class="form-control" placeholder="https://" type="text" name="user[url]" id="user_url" />
                                    </div> <!-- close .form-group -->
                                </div> <!-- close .col -->

                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="user_location">Location</label>
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="user[location]" id="user_location" />
                                        </div>
                                    </div> <!-- close .form-group -->
                                </div> <!-- close .col -->

                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="user_instagram_username">Instagram username</label>
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="user[instagram_username]" id="user_instagram_username" />
                                        </div>
                                        <div class="help-block text-secondary">
                                            <p>So that we can feature you on <a href="https://instagram.com/unsplash">@unsplash</a></p>
                                        </div> <!-- close .help-block -->
                                    </div> <!-- close .form-group -->
                                </div> <!-- close .col -->

                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="twitter_username">Twitter username</label>
                                        <input type="hidden" name="user[twitter_account_attributes][id]" id="user_twitter_account_attributes_id" />
                                        <div class="input-group">
                                            <input type="text" name="user[twitter_account_attributes][username]" id="twitter_username" class="form-control" />
                                        </div>

                                        <div class="help-block text-secondary">
                                            <p>So that we can feature you on <a href="https://twitter.com/unsplash">@unsplash</a></p>
                                        </div> <!-- close .help-block -->
                                    </div> <!-- close .form-group -->
                                </div> <!-- close .col -->

                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="user_bio">Bio</label>
                                            <div class="input-with-counter js-character-count-container">
                                                <textarea class="form-control" rows="4" data-character-count="250" name="user[bio]" id="user_bio"></textarea>
                                                <div class="character-count character-count--textarea js-character-count">250</div>
                                             </div>
                                    </div> <!-- close .form-group -->
                                </div> <!-- close .col -->

                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="user_interests">Interests <span class="text-secondary">(maximum 5)</span></label>
                                        <input type="text" name="user[user_tags_set][custom_tags]" id="user_interests" value="" class="form-control" data-taggable="true" />
                                        <div class="help-block text-secondary">
                                            <p>Your interests are generated from the types of photos you like, collect, and contribute.</p>
                                        </div> <!-- close .help-block -->
                                    </div> <!-- close .form-group -->
                                </div> <!-- close .col -->
                            </div> <!-- close .row -->

                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <h6 class="delta text-weight--medium">Messaging</h6>
                                    <div class="form-group">
                                        <div class="checkbox checkbox--with-helper">
                                            <label for="user_allow_messages">
                                            <input name="user[allow_messages]" type="hidden" value="0" /><input type="checkbox" value="1" checked="checked" name="user[allow_messages]" id="user_allow_messages" />
                                            Display a 'Message' button on your profile</label>
                                            <div class="label__helper">
                                                <span class="text-secondary">Messages will be sent to your email</span>
                                            </div>
                                        </div> <!-- close .checkbox -->
                                    </div> <!-- close .form-group -->
                                </div> <!-- close .col -->
                            </div> <!-- close .row -->

                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <div class="form-group">
                                        <input style="width: 100%;" type="submit" name="commit" value="Update Account" class="btn btn-dark btn-block-level" data-disable-with="···" />
                                    </div> <!-- close .form-group -->
                                </div> <!-- close .col -->
                            </div> <!-- close .row -->
                        </form></div> <!-- close .form -->
                    </div>
                </div>
            </div>
        </div>

    <!-- --------------- MODAL SUBMIT A PHOTO --------------- -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Select photos for publishing</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <?php echo form_open_multipart('account/upload'); ?>
                <div class="_2lwrF">
                    <div class="IM4-L">
                        <div class="_1xpOz">
                            <label class="_1OoXQ _2KKlp _2w5SL _1A4KC">
                                <div class="NRa9H">
                                    <div class="_3rSeE" style="width: 150px; height: 93px;">
                                        <div class="IEpfq" style="padding-bottom: 62%;">
                                            <img src="<?php echo base_url(); ?>/assets/img/img-upload.png" class="_2zEKz">
                                        </div>
                                    </div>
                                    <div style="font-family: Helvetica;
                                                font-size: 16px;
                                                color: #AAAAAA;
                                                margin-top: 30px;">
                                                Drop your photos here or 
                                        <div class="_37zTg _1l4Hh _1CBrG _1zIyn xLon9 ReA9D" style="background-color: #fff;
                                                                                                    border-color: #ddd;">Browse</div>
                                    </div>
                                </div>
                                <input type="file" multiple="" accept="image/jpeg" class="_2dMtn _2iX7Z" name="image">
                                <div class="_64ju2" style="font-family: Helvetica; font-size: 12px; color: #AAAAAA;">You have 9 uploads remaining this week.</div>
                            </label>
                        </div>
                        <form action="" method="POST">
                            <input type="text" placeholder="Keyword for Photo" class="form-control" name="keyword">
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="justify-content: flex-start;">
                <a href="#">Read the Unsplash License</a>
                <button style="margin-left: 180px;" name="publish" type="button" class="btn btn-primary">Publish Photos</button>
            </div>
            </div>
        </div>
    </div>
</body>
<!-- <script>
    $('._1xpOz').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('._3rSeE').addClass("selected").html(fileName);
    });
</script> -->
</html>
