<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit admin</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />

      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="Codedthemes" />
      <!-- Favicon icon -->

      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{asset('plant/css/bootstrap/css/bootstrap.min.css')}}">
      <!-- waves.css -->
      <link rel="stylesheet" href="{{asset('plant/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{asset('plant/icon/themify-icons/themify-icons.css')}}">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{asset('plant/icon/icofont/css/icofont.css')}}">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="{{asset('plant/icon/font-awesome/css/font-awesome.min.css')}}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{asset('plant/css/style.css')}}">
      <link rel="icon" type="image/png" href="{{ asset('public/plant/images/logo.png') }}">
  </head>

  <body themebg-pattern="theme1">
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>

              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>

              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <form class="md-float-material form-material" action="{{route('admin.update',$admin)}}" method="POST">
                    @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @csrf
                        @method('PATCH')
                            <div class="text-center">
                           
                            </div>
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Editar Admin</h3>
                                        </div>
                                    </div>
                                    <div class="form-group form-primary">
                                    <input type="text" id="name" name="nombre" class="form-control" value="{{$admin->nombre}}">
                                        <span class="form-bar"></span>
                                        <label >Ingresa tu nuevo nombre</label>
                                        
                                    </div>
                                    <div class="form-group form-primary">
                                    <input type="email" id="correo" name="correo" value="{{$admin->correo}}" class="form-control"/>
                                        <span class="form-bar"></span>
                                        <label >Ingresa tu nuevo correo electronico</label>
                                        
                                    </div>
                                    <div class="form-group form-primary">
                                    <input  id="password"  name="password" value="{{$admin->password}}" class="form-control"/>
                                        <span class="form-bar"></span>
                                        <label >Ingresa tu nueva  contraseña</label>
                                        
                                    </div>
                                    <div class="form-group form-primary">
                                    <label >Selecciona a tu empleado</label>
                                    <select name = "empleado_id[]" multiple>
                                          @foreach ($empleados as $empl)
                                            <option value = "{{$empl->id}}">  @selected(array_search($empl->id, old('empleado_id') ?? []) !== false )> {{$empl->nombre}} </option>
                                            
                                        @endforeach 
                                    </select>
    
                                    
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                        <input class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20" type="submit" value="Actualizar" />
                                            
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <p class="text-inverse text-left m-b-0"></p>
                                           
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                        <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    
<!-- Required Jquery -->
<script type="text/javascript" src="{{asset('plant/js/jquery/jquery.min.js')}} "></script>
<script type="text/javascript" src="{{asset('plant/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plant/js/popper.js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plant/js/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- waves js -->
<script src="{{asset('plant/pages/waves/js/waves.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('plant/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('plant/js/common-pages.js')}}"></script>
</body>

</html>