@extends('master')

@section('header')
<div class="grid">
    <div class="row padding10">
        <span class="align-center" title="">
            <h1>Welcome</h1>
            <h3>You're here because you're awesome</h3>
        </span>
    </div>
</div>
@stop

@section('navbar')
    <div class="app-bar" data-role="appbar" style="z-index:10;position:relative;">
        <a class="app-bar-element">
        <span id="toggle-tiles-dropdown" class="mif-apps mif-2x"></span>
        <div class="app-bar-drop-container"
                data-role="dropdown"
                data-toggle-element="#toggle-tiles-dropdown"
                data-no-close="false" style="width: 324px;">
            <div class="tile-container bg-white">
                <div class="tile-small bg-cyan">
                    <div class="tile-content iconic">
                        <span class="icon mif-onedrive"></span>
                    </div>
                </div>
                <div class="tile-small bg-yellow">
                    <div class="tile-content iconic">
                        <span class="icon mif-google"></span>
                    </div>
                </div>
                <div class="tile-small bg-red">
                    <div class="tile-content iconic">
                        <span class="icon mif-facebook"></span>
                    </div>
                </div>
                <div class="tile-small bg-green">
                    <div class="tile-content iconic">
                        <span class="icon mif-twitter"></span>
                    </div>
                </div>
            </div>
        </div>
    </a>
        <span class="app-bar-divider"></span>
        <ul class="app-bar-menu">
            <li data-menuanchor="firstPage">
                <a href="#rumah">Home</a>
            </li>
            <li data-menuanchor="secondPage">
                <a href="#apasih-kami-itu">About</a>               
            </li>
            <li data-menuanchor="thirdpage">
                <a href="#kami-ngasih-apa">Service</a>
            </li>
            <li data-menuanchor="fourthPage">
                <a href="#siapa-sih-yang-ngerjain">Team</a>         
            </li>
            <li data-menuanchor="fifthPage">
                <a href="#nyari-kami-dimana">Contact Us</a>         
            </li>
        </ul>

        <div class="place-right">
                    <form>
                        <div class="input-control text" style="width: 300px">
                            <input type="text" name="q" placeholder="Search...">
                            <button class="button"><span class="mif-search"></span></button>
                        </div>
                    </form>
                </div>
    </div>
@stop

@section('isi')
<div class="page-content" style="margin: auto;width: 70%;max-width: 1000px;">
    <div class="main clearfix">
        <div id="st-trigger-effects" class="column">
            <a href="#" data-effect="st-effect-14">
                <div class="tile bg-orange fg-white" data-role="tile">  
                    <div class="tile-content iconic">
                         <span class="icon mif-school"></span>
                         <span class="tile-label">SIA</span>
                    </div>                  
                </div>
            </a>
            <a href="#" data-effect="st-effect-14">
                <div class="tile bg-indigo fg-white" data-role="tile">
                    <div class="tile-content iconic">
                         <span class="icon mif-calculator2"></span>
                         <span class="tile-label">Point Of Sales</span>
                    </div>
                </div>
            </a>
            <a href="#" data-effect="st-effect-14"><div class="tile" data-role="tile"></div></a>
            <a href="#" data-effect="st-effect-14"><div class="tile" data-role="tile"></div></a>
            <a href="#" data-effect="st-effect-14"><div class="tile-wide" data-role="tile"></div></a>
        </div>                           
    </div>
</div>
@stop