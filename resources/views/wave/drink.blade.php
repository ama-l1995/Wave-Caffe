@extends('layouts.index')

@section('title', 'Drink')

@section('content')


            <!-- Drink Menu Page -->
                <nav class="tm-black-bg tm-drinks-nav">
                    <ul id="categories">
                        @foreach($categories as $category)
                        <li class="d-flex">
                            <a href="#" class="tm-tab-link active category" data-id="{{ $category->id }}">{{ $category->category_name }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </nav>
                @foreach($beverages as $val)
                <div id="{{ $val ->category_id }}" class="tm-tab-content">
                    <div class="tm-list" >
                        <div class="tm-list-item">
                            <img src="asset/img/{{$val->image}}" alt="Image" class="tm-list-item-img">
                            <div class="tm-black-bg tm-list-item-text">
                                <h3 class="tm-list-item-name">{{$val->Title}}<span
                                        class="tm-list-item-price">{{$val->Price}}</span></h3>
                                <p class="tm-list-item-description">{{$val->Content}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
                <!-- end Drink Menu Page -->

                    <!-- About Us Page -->
                    <div id="about" class="tm-page-content">
                        <div class="tm-black-bg tm-mb-20 tm-about-box-1">
                            <h2 class="tm-text-primary tm-about-header">About Wave Cafe</h2>
                            <div class="tm-list-item tm-list-item-2">
                                <img src="{{asset('asset/img/about-1.png')}}" alt="Image" class="tm-list-item-img tm-list-item-img-big">
                                <div class="tm-list-item-text-2">
                                    <p>Wave Cafe is a one-page video background HTML CSS template from Tooplate. You can
                                        use this for your business websites.</p>
                                    <p>You can also use this for your client websites which you get paid for your
                                        website services. Please tell your friends about us.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tm-black-bg tm-mb-20 tm-about-box-2">
                            <div class="tm-list-item tm-list-item-2">
                                <div class="tm-list-item-text-2">
                                    <h2 class="tm-text-primary">How we began</h2>
                                    <p>If you wish to support us, please contact Tooplate. Thank you. Duis bibendum erat
                                        nec ipsum consectetur sodales.</p>
                                </div>
                                <img src="{{asset('asset/img/about-2.png')}}" alt="Image"
                                    class="tm-list-item-img tm-list-item-img-big tm-img-right">
                            </div>
                            <p>Donec non urna elit. Quisque ut magna in dui mattis iaculis eu finibus metus. Suspendisse
                                vel mi a lacus finibus vehicula vel ut diam. Nam pellentesque, mi quis ullamcorper.</p>
                        </div>
                    </div>
                    <!-- end About Us Page -->

                    <!-- Special Items Page -->
                    <div id="special" class="tm-page-content">
                        <div class="tm-special-items">
                            <div class="tm-black-bg tm-special-item">
                                <img src="img/special-01.jpg" alt="Image">
                             <div class="tm-special-item-description">
                                    <h2 class="tm-text-primary tm-special-item-title">Special One</h2>
                                    <p class="tm-special-item-text">Here is a short text description for the first
                                        special item. You are not allowed to redistribute this template ZIP file.</p>
                                </div>
                            </div>
                            <div class="tm-black-bg tm-special-item">
                                <img src="img/special-02.jpg" alt="Image">
                                <div class="tm-special-item-description">
                                    <h2 class="tm-text-primary tm-special-item-title">Second Item</h2>
                                    <p class="tm-special-item-text">You are allowed to download, modify and use this
                                        template for your commercial or non-commercial websites.</p>
                                </div>
                            </div>
                            <div class="tm-black-bg tm-special-item">
                                <img src="img/special-03.jpg" alt="Image">
                                <div class="tm-special-item-description">
                                    <h2 class="tm-text-primary tm-special-item-title">Third Special Item</h2>
                                    <p class="tm-special-item-text">Pellentesque in ultrices mi, quis mollis nulla.
                                        Quisque sed commodo est, quis tincidunt nunc.</p>
                                </div>
                            </div>
                            <div class="tm-black-bg tm-special-item">
                                <img src="img/special-04.jpg" alt="Image">
                                <div class="tm-special-item-description">
                                    <h2 class="tm-text-primary tm-special-item-title">Special Item Fourth</h2>
                                    <p class="tm-special-item-text">Vivamus finibus nulla sed metus sagittis, sed
                                        ultrices magna aliquam. Mauris fermentum.</p>
                                </div>
                            </div>
                            <div class="tm-black-bg tm-special-item">
                                <img src="img/special-05.jpg" alt="Image">
                                <div class="tm-special-item-description">
                                    <h2 class="tm-text-primary tm-special-item-title">Sixth Sense</h2>
                                    <p class="tm-special-item-text">Here is a short text description for sixth item.
                                        This text is four lines.</p>
                                </div>
                            </div>
                            <div class="tm-black-bg tm-special-item">
                                <img src="img/special-06.jpg" alt="Image">
                                <div class="tm-special-item-description">
                                    <h2 class="tm-text-primary tm-special-item-title">Seventh Item</h2>
                                    <p class="tm-special-item-text">Curabitur eget erat sit amet sapien aliquet
                                        vulputate quis sed arcu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Special Items Page -->

                    <!-- Contact Page -->
                    <div id="contact" class="tm-page-content">
                        <div class="tm-black-bg tm-contact-text-container">
                            <h2 class="tm-text-primary">Contact Wave</h2>
                            <p>Wave Cafe Template has a video background. You can use this layout for your websites
                                Please contact Tooplates Facebook page Tell your friends about our website.</p>
                        </div>
                        <div class="tm-black-bg tm-contact-form-container tm-align-right">
                            <form action="{{ route('submit')}}" method="POST" id="contact-form">
                                @csrf

                                <div class="tm-form-group">
                                    <input type="text" name="full_Name" id="full_Name" class="tm-form-control" placeholder="Name"
                                        required="" />
                                </div>
                                <div class="tm-form-group">
                                    <input type="email" name="email" id="email" class="tm-form-control" placeholder="Email"
                                        required="" />
                                </div>
                                <div class="tm-form-group tm-mb-30">
                                    <textarea rows="6" name="content" id="content" class="tm-form-control" placeholder="Message"
                                        required=""></textarea>
                                </div>
                                <div>
                                    <button type="submit" class="tm-btn-primary tm-align-right">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end Contact Page -->



@endsection
