<x-guest-layout>
    <div style="background: rgba(106,169,108);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 0px );
    -webkit-backdrop-filter: blur( 0px );
">
        @include('frontend/layouts/inc/nav')

    </div>
    <div>

        <div class="community wrapper">
            <div class="left">
                <div class="img-profile">
                    <img src="{{ asset('assets/images/user-profile-circle-solid.1024x1024.png')}}" width="50px"
                        height="50px" alt="">
                    <table cellpading="0" border="0">
                        <tr>
                            <td style="font-weight: 700;font-size:20px">
                                <p>Farmer</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-weight: 600;font-size:15px">Posted: 5hrs ago</p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="details">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore earum ducimus obcaecati est autem
                    dolores, modi quaerat, numquam aspernatur consequatur ratione provident placeat? Nihil, quasi
                    aspernatur quod laborum atque nisi?
                </div>

                {{-- image and comment --}}
                <div class="post_image">
                    <div class="post_left">
                        <img src="{{ asset('assets/images/Capture.PNG')}}" style="width: 100%" alt="">
                        <div>
                            <i class='bx bxs-heart heart' data-index="1"></i> <span>60</span>
                        </div>
                    </div>

                    <div class="community__right">
                        <p>Comment</p>
                        <div class="comment">
                            <form action="" style="display: grid">

                                <input type="text" name="comment" style="height: 10vh"><br><br>
                                <div class="comment__buttons"
                                    style="display: flex; place-content: end;margin-block:0.5rem">
                                    <button>Upload</button>
                                    <br><br>
                                </div>
                            </form>
                            <div class="scroll" style="">

                                <div class="all_commentss">
                                    <img src="{{ asset('assets/images/user-profile-circle-solid.1024x1024.png')}}"
                                        height="50px" width="50px" alt="">
                                    <div>
                                        <table cellpading="0" border="0">
                                            <tr>
                                                <td style="font-weight: 700;font-size:20px">
                                                    <p>Farmer</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="font-weight: 600;font-size:15px">Posted: 5hrs ago</p>
                                                </td>
                                            </tr>
                                        </table>
                                        <div>
                                            <span>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic error
                                                dignissimos
                                                tempora minima ex corrupti. Lorem ipsum dolor sit amet consectetur,
                                                adipisicing
                                                elit. Beatae quas sapiente, doloremque deleniti similique qui.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="all_commentss">
                                    <img src="{{ asset('assets/images/user-profile-circle-solid.1024x1024.png')}}"
                                        height="50px" width="50px" alt="">
                                    <div>
                                        <table cellpading="0" border="0">
                                            <tr>
                                                <td style="font-weight: 700;font-size:20px">
                                                    <p>Farmer</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="font-weight: 600;font-size:15px">Posted: 5hrs ago</p>
                                                </td>
                                            </tr>
                                        </table>
                                        <div>
                                            <span>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic error
                                                dignissimos
                                                tempora minima ex corrupti. Lorem ipsum dolor sit amet consectetur,
                                                adipisicing
                                                elit. Beatae quas sapiente, doloremque deleniti similique qui.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="all_commentss">
                                    <img src="{{ asset('assets/images/user-profile-circle-solid.1024x1024.png')}}"
                                        height="50px" width="50px" alt="">
                                    <div>
                                        <table cellpading="0" border="0">
                                            <tr>
                                                <td style="font-weight: 700;font-size:20px">
                                                    <p>Farmer</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="font-weight: 600;font-size:15px">Posted: 5hrs ago</p>
                                                </td>
                                            </tr>
                                        </table>
                                        <div>
                                            <span>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic error
                                                dignissimos
                                                tempora minima ex corrupti. Lorem ipsum dolor sit amet consectetur,
                                                adipisicing
                                                elit. Beatae quas sapiente, doloremque deleniti similique qui.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="all_commentss">
                                    <img src="{{ asset('assets/images/user-profile-circle-solid.1024x1024.png')}}"
                                        height="50px" width="50px" alt="">
                                    <div>
                                        <table cellpading="0" border="0">
                                            <tr>
                                                <td style="font-weight: 700;font-size:20px">
                                                    <p>Farmer</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="font-weight: 600;font-size:15px">Posted: 5hrs ago</p>
                                                </td>
                                            </tr>
                                        </table>
                                        <div>
                                            <span>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic error
                                                dignissimos
                                                tempora minima ex corrupti. Lorem ipsum dolor sit amet consectetur,
                                                adipisicing
                                                elit. Beatae quas sapiente, doloremque deleniti similique qui.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="community wrapper">
                <div class="left">
                    <div class="img-profile">
                        <img src="{{ asset('assets/images/user-profile-circle-solid.1024x1024.png')}}" width="50px"
                            height="50px" alt="">
                        <table cellpading="0" border="0">
                            <tr>
                                <td style="font-weight: 700;font-size:20px">
                                    <p>Farmer</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-weight: 600;font-size:15px">Posted: 5hrs ago</p>
                                </td>
                            </tr>
                        </table>
    
    
                    </div>
                    <div class="details">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore earum ducimus obcaecati est autem
                        dolores, modi quaerat, numquam aspernatur consequatur ratione provident placeat? Nihil, quasi
                        aspernatur quod laborum atque nisi?
                    </div>
    
                    {{-- image and comment --}}
                    <div class="post_image">
                        <div class="post_left">
                            <img src="{{ asset('assets/images/Capture.PNG')}}" style="width: 100%" alt="">
                            <div>
                                <i class='bx bxs-heart heart' data-index="1"></i> <span>60</span>
                            </div>
                        </div>
    
                        <div class="community__right">
                            <p>Comment</p>
                            <div class="comment">
                                <form action="" style="display: grid">
    
                                    <input type="text" name="comment" style="height: 10vh"><br><br>
                                    <div class="comment__buttons"
                                        style="display: flex; place-content: end;margin-block:0.5rem">
                                        <button>Upload</button>
                                        <br><br>
                                    </div>
                                </form>
                                <div class="scroll" style="">
    
                                    <div class="all_commentss">
                                        <img src="{{ asset('assets/images/user-profile-circle-solid.1024x1024.png')}}"
                                            height="50px" width="50px" alt="">
                                        <div>
                                            <table cellpading="0" border="0">
                                                <tr>
                                                    <td style="font-weight: 700;font-size:20px">
                                                        <p>Farmer</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p style="font-weight: 600;font-size:15px">Posted: 5hrs ago</p>
                                                    </td>
                                                </tr>
                                            </table>
                                            <div>
                                                <span>
                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic error
                                                    dignissimos
                                                    tempora minima ex corrupti. Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing
                                                    elit. Beatae quas sapiente, doloremque deleniti similique qui.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="all_commentss">
                                        <img src="{{ asset('assets/images/user-profile-circle-solid.1024x1024.png')}}"
                                            height="50px" width="50px" alt="">
                                        <div>
                                            <table cellpading="0" border="0">
                                                <tr>
                                                    <td style="font-weight: 700;font-size:20px">
                                                        <p>Farmer</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p style="font-weight: 600;font-size:15px">Posted: 5hrs ago</p>
                                                    </td>
                                                </tr>
                                            </table>
                                            <div>
                                                <span>
                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic error
                                                    dignissimos
                                                    tempora minima ex corrupti. Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing
                                                    elit. Beatae quas sapiente, doloremque deleniti similique qui.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="all_commentss">
                                        <img src="{{ asset('assets/images/user-profile-circle-solid.1024x1024.png')}}"
                                            height="50px" width="50px" alt="">
                                        <div>
                                            <table cellpading="0" border="0">
                                                <tr>
                                                    <td style="font-weight: 700;font-size:20px">
                                                        <p>Farmer</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p style="font-weight: 600;font-size:15px">Posted: 5hrs ago</p>
                                                    </td>
                                                </tr>
                                            </table>
                                            <div>
                                                <span>
                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic error
                                                    dignissimos
                                                    tempora minima ex corrupti. Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing
                                                    elit. Beatae quas sapiente, doloremque deleniti similique qui.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="all_commentss">
                                        <img src="{{ asset('assets/images/user-profile-circle-solid.1024x1024.png')}}"
                                            height="50px" width="50px" alt="">
                                        <div>
                                            <table cellpading="0" border="0">
                                                <tr>
                                                    <td style="font-weight: 700;font-size:20px">
                                                        <p>Farmer</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p style="font-weight: 600;font-size:15px">Posted: 5hrs ago</p>
                                                    </td>
                                                </tr>
                                            </table>
                                            <div>
                                                <span>
                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic error
                                                    dignissimos
                                                    tempora minima ex corrupti. Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing
                                                    elit. Beatae quas sapiente, doloremque deleniti similique qui.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="community wrapper">
                    <div class="left">
                        <div class="img-profile">
                            <img src="{{ asset('assets/images/user-profile-circle-solid.1024x1024.png')}}" width="50px"
                                height="50px" alt="">
                            <table cellpading="0" border="0">
                                <tr>
                                    <td style="font-weight: 700;font-size:20px">
                                        <p>Farmer</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="font-weight: 600;font-size:15px">Posted: 5hrs ago</p>
                                    </td>
                                </tr>
                            </table>
        
        
                        </div>
                        <div class="details">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore earum ducimus obcaecati est autem
                            dolores, modi quaerat, numquam aspernatur consequatur ratione provident placeat? Nihil, quasi
                            aspernatur quod laborum atque nisi?
                        </div>
        
                        {{-- image and comment --}}
                        <div class="post_image">
                            <div class="post_left">
                                <img src="{{ asset('assets/images/Capture.PNG')}}" style="width: 100%" alt="">
                                <div>
                                    <i class='bx bxs-heart heart' data-index="1"></i> <span>60</span>
                                </div>
                            </div>
        
                            <div class="community__right">
                                <p>Comment</p>
                                <div class="comment">
                                    <form action="" style="display: grid">
        
                                        <input type="text" name="comment" style="height: 10vh"><br><br>
                                        <div class="comment__buttons"
                                            style="display: flex; place-content: end;margin-block:0.5rem">
                                            <button>Upload</button>
                                            <br><br>
                                        </div>
                                    </form>
                                    <div class="scroll" style="">
        
                                        <div class="all_commentss">
                                            <img src="{{ asset('assets/images/user-profile-circle-solid.1024x1024.png')}}"
                                                height="50px" width="50px" alt="">
                                            <div>
                                                <table cellpading="0" border="0">
                                                    <tr>
                                                        <td style="font-weight: 700;font-size:20px">
                                                            <p>Farmer</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p style="font-weight: 600;font-size:15px">Posted: 5hrs ago</p>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <div>
                                                    <span>
                                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic error
                                                        dignissimos
                                                        tempora minima ex corrupti. Lorem ipsum dolor sit amet consectetur,
                                                        adipisicing
                                                        elit. Beatae quas sapiente, doloremque deleniti similique qui.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="all_commentss">
                                            <img src="{{ asset('assets/images/user-profile-circle-solid.1024x1024.png')}}"
                                                height="50px" width="50px" alt="">
                                            <div>
                                                <table cellpading="0" border="0">
                                                    <tr>
                                                        <td style="font-weight: 700;font-size:20px">
                                                            <p>Farmer</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p style="font-weight: 600;font-size:15px">Posted: 5hrs ago</p>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <div>
                                                    <span>
                                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic error
                                                        dignissimos
                                                        tempora minima ex corrupti. Lorem ipsum dolor sit amet consectetur,
                                                        adipisicing
                                                        elit. Beatae quas sapiente, doloremque deleniti similique qui.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="all_commentss">
                                            <img src="{{ asset('assets/images/user-profile-circle-solid.1024x1024.png')}}"
                                                height="50px" width="50px" alt="">
                                            <div>
                                                <table cellpading="0" border="0">
                                                    <tr>
                                                        <td style="font-weight: 700;font-size:20px">
                                                            <p>Farmer</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p style="font-weight: 600;font-size:15px">Posted: 5hrs ago</p>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <div>
                                                    <span>
                                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic error
                                                        dignissimos
                                                        tempora minima ex corrupti. Lorem ipsum dolor sit amet consectetur,
                                                        adipisicing
                                                        elit. Beatae quas sapiente, doloremque deleniti similique qui.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="all_commentss">
                                            <img src="{{ asset('assets/images/user-profile-circle-solid.1024x1024.png')}}"
                                                height="50px" width="50px" alt="">
                                            <div>
                                                <table cellpading="0" border="0">
                                                    <tr>
                                                        <td style="font-weight: 700;font-size:20px">
                                                            <p>Farmer</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p style="font-weight: 600;font-size:15px">Posted: 5hrs ago</p>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <div>
                                                    <span>
                                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic error
                                                        dignissimos
                                                        tempora minima ex corrupti. Lorem ipsum dolor sit amet consectetur,
                                                        adipisicing
                                                        elit. Beatae quas sapiente, doloremque deleniti similique qui.
                                                    </span>
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

</x-guest-layout>