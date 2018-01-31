@extends('shy.layout')

@section('content')
<section id="about" class="wrapper view">
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp text-center" data-wow-duration="1s">
                        <h2 class="card-header white-text">Kailan naging tayo? :"></h2>
                        <br>

                        <div class="col-sm-12">
                            <div class="text-center">

                                <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary active ml-1">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked> January 1, 2017
                                  </label>
                                  <label class="btn btn-primary ml-1">
                                    <input type="radio" name="options" id="option2" autocomplete="off"> January 1, 2018
                                  </label>
                                  <label class="btn btn-primary ml-1">
                                    <input type="radio" name="options" id="option3" autocomplete="off"> February 1, 2018
                                  </label>
                                  <label class="btn btn-primary ml-1">
                                    <input type="radio" name="options" id="option4" autocomplete="off"> February 10, 2018
                                  </label>
                                </div>

                            </div>
                        </div>
                        <br>
                        <div class="col-sm-12">
                            <div class="text-center">
                                <button class="btn btn-info mb-2 waves-effect waves-light btn-lg" id="submit">
                                    <i class="fa fa-send ml-2"></i>
                                    Submit
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="text-center">
                                <h4 class="green-text" id="correct" style="display: none">
                                    Congratulations!
                                </h4>
                                <h4 class="red-text" id="wrong" style="display: none">
                                    Wrong answer! Di mo yata ako love :(
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    $("#submit").on("click", function() {
        if($("#option2").is(':checked')) {
            $("#correct").fadeIn();
            $("#wrong").fadeOut();
            setTimeout(function() {
                window.location.href = "/shy/last";
            }, 2000);
        }
        else {
            $("#correct").fadeOut();
            $("#wrong").text('Wrong answer! Di mo yata ako love :(');
            $("#wrong").fadeIn();
        }
    });
</script>
@endsection