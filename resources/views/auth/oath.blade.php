
@extends('layouts.app')
@section('content')
    <section id="oath">

        <div class="container-fluid oath-main d-flex justify-content-center align-items-center">
            
            <div class="oath-div d-flex  justify-content-center">
                <form>
                <div class="oath-inner">

                    <h5 class="mt-4 mb-1">Oath!</h5>
                    <p class="mb-0">I Take The Oath</p>

                    <div class="container-fluid terms-cond-box rounded">
<!--                        First-Row-->
                        <div class="row d-flex align-items-sm-start">
                            <div class="col-md-1 col-sm-1 col-1 input-box d-flex justify-content-center p-0 m-0 pt-3">
                            <input type="checkbox" name="terms" id="terms" required>
                            </div>
                         <div class="col-md-11 col-sm-11 col-11 terms-text p-0 m-0 pt-3">
                             <p>1. To respect the digital rights of every individual by not engaging in any form of offensive, or abusive, behaviour and demonstrating empathy online.
                                </p>
                            </div>
                            
                        </div>
<!--                        Second-Row-->
                         <div class="row d-flex align-items-sm-start">
                            <div class="col-md-1 col-sm-1 col-1 input-box d-flex justify-content-center p-0 m-0">
                            <input type="checkbox" name="terms" id="terms" required>
                            </div>
                         <div class="col-md-10 col-sm-10 col-10 terms-text p-0 m-0">
                             <p>1. To respect the digital rights of every individual by not engaging in any form of offensive, or abusive, behaviour and demonstrating empathy online.
                                </p>
                            </div>
                        </div>
<!--                        Third-Row-->
                         <div class="row d-flex align-items-sm-start">
                            <div class="col-md-1 col-sm-1 col-1 input-box d-flex justify-content-center  p-0 m-0">
                            <input type="checkbox" name="terms" id="terms" required>
                            </div>
                         <div class="col-md-10 col-sm-10 col-10 terms-text p-0 m-0">
                             <p>1. To respect the digital rights of every individual by not engaging in any form of offensive, or abusive, behaviour and demonstrating empathy online.
                                </p>
                            </div>
                        </div>
<!--                        Fourth-Row-->
                         <div class="row d-flex align-items-sm-start">
                            <div class="col-md-1 col-sm-1 col-1 input-box d-flex justify-content-center  p-0 m-0">
                            <input type="checkbox" name="terms" id="terms" required>
                            </div>
                         <div class="col-md-10 col-sm-10 col-10 terms-text p-0 m-0">
                             <p>1. To respect the digital rights of every individual by not engaging in any form of offensive, or abusive, behaviour and demonstrating empathy online.
                                </p>
                            </div>
                        </div>
<!--                Fifth-Row-Term&condition-->
                         <div class="row d-flex align-items-sm-start">
                            <div class="col-md-1 col-sm-1 col-1 input-box d-flex justify-content-center  p-0 m-0">
                            <input type="checkbox" name="terms" id="terms" required>
                            </div>
                         <div class="col-md-10 col-sm-10 col-10 terms-text p-0 m-0">
                             <p>I Agree
                                </p>
                            </div>
                        </div>
                        
                    </div>

                    <button class="btn mt-2" type="submit" name="submit" >Ready</button>
                </div>
                </form>
            </div>
            
        </div>

    </section>
    @endsection

