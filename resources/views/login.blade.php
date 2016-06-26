@extends('templates.masterpage')
@section('content')
    <script src="{{ URL::asset('assets/js/jquery.backstretch.min.js') }}"></script>
    <div class="container">
        {{ Hash::make('test123') }}

        <div class="col-lg-4 col-lg-offset-4">
            <div class="lock-screen">
                <div style="margin-top: 270px;"></div>
                <div id="showtime"></div>
                <h2><a data-toggle="modal" href="#login"><i class="fa fa-lock"></i></a></h2>
                <h3>LOGIN</h3>

                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="login" role="dialog" tabindex="-1" id="login"
                     class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Please Login</h4>
                            </div>
                            <form method="post" action="/login">
                                <div class="modal-body">
                                    <p class="centered"><img class="img-circle" width="80" src="assets/img/profile/2.jpg">
                                    </p>

                                    <div class="login-wrap">
                                        <input type="text" id="login_input_username" class="form-control"
                                               placeholder="Username" name="username" required autofocus>
                                        <br>
                                        <input type="password" id="login_input_password" class="form-control"
                                               placeholder="Password" name="password" required>
                                        <br>
                                    </div>
                                </div>
                                <div class="modal-footer centered">
                                    <button data-dismiss="modal" class="btn btn-theme04"
                                            type="button">Cancel</button>
                                    <button class="btn btn-theme03" href="index.php" type="submit"
                                            name="login">Login</button>
                                </div>
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </div>
                <!-- modal -->


            </div>
        </div>
        <!-- /col-lg-4 -->

    </div>
    <script>
        $.backstretch([
            "{{ URL::asset('assets/img/bg/1.jpg') }}",
            "{{ URL::asset('assets/img/bg/2.jpg') }}",
            "{{ URL::asset('assets/img/bg/3.jpg') }}",
            "{{ URL::asset('assets/img/bg/4.jpg') }}",
            "{{ URL::asset('assets/img/bg/5.jpg') }}",
        ], {duration: 10000, fade: 900});
    </script>

    <script type="text/javascript">
        $(function() {
            getTime();
            //$('.backstretch').height($('.content-wrapper').height());
        });
    </script>

    <script>
        function getTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            // add a zero in front of numbers<10
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('showtime').innerHTML = h + ":" + m + ":" + s;
            t = setTimeout(function () {
                getTime()
            }, 500);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
    </script>
@stop