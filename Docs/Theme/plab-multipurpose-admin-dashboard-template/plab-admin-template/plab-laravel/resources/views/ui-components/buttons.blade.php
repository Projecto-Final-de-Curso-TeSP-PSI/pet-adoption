@extends('layout.mainlayout')

@section('content-wrapper')
    <!-- Main Content Header -->
    <div class="main-content-header">
        <h1>Buttons</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <span class="active">Buttons</span>
            </li>
        </ol>
    </div>
    <!-- End Main Content Header -->

    <!-- Default Buttons -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Default Buttons</h5>
                    </div>

                    <button type="button" class="btn btn-primary mt-2 mr-2">Primary</button>
                    <button type="button" class="btn btn-secondary mt-2 mr-2">Secondary</button>
                    <button type="button" class="btn btn-success mt-2 mr-2">Success</button>
                    <button type="button" class="btn btn-danger mt-2 mr-2">Danger</button>
                    <button type="button" class="btn btn-warning mt-2 mr-2">Warning</button>
                    <button type="button" class="btn btn-info mt-2 mr-2">Info</button>
                    <button type="button" class="btn btn-light mt-2 mr-2">Light</button>
                    <button type="button" class="btn btn-dark mt-2 mr-2">Dark</button>
                    <button type="button" class="btn btn-link mt-2 mr-2">Link</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Default Buttons -->

    <!-- Rounded Buttons -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Rounded Buttons</h5>
                    </div>

                    <button type="button" class="btn btn-primary rounded mt-2 mr-2">Primary</button>
                    <button type="button" class="btn btn-secondary rounded mt-2 mr-2">Secondary</button>
                    <button type="button" class="btn btn-success rounded mt-2 mr-2">Success</button>
                    <button type="button" class="btn btn-danger rounded mt-2 mr-2">Danger</button>
                    <button type="button" class="btn btn-warning rounded mt-2 mr-2">Warning</button>
                    <button type="button" class="btn btn-info rounded mt-2 mr-2">Info</button>
                    <button type="button" class="btn btn-light rounded mt-2 mr-2">Light</button>
                    <button type="button" class="btn btn-dark rounded mt-2 mr-2">Dark</button>
                    <button type="button" class="btn btn-link rounded mt-2 mr-2">Link</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Rounded Buttons -->

    <!-- Outline Buttons -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Outline Buttons</h5>
                    </div>

                    <button type="button" class="btn btn-outline-primary mt-2 mr-2">Primary</button>
                    <button type="button" class="btn btn-outline-secondary mt-2 mr-2">Secondary</button>
                    <button type="button" class="btn btn-outline-success mt-2 mr-2">Success</button>
                    <button type="button" class="btn btn-outline-danger mt-2 mr-2">Danger</button>
                    <button type="button" class="btn btn-outline-warning mt-2 mr-2">Warning</button>
                    <button type="button" class="btn btn-outline-info mt-2 mr-2">Info</button>
                    <button type="button" class="btn btn-outline-light mt-2 mr-2">Light</button>
                    <button type="button" class="btn btn-outline-dark mt-2 mr-2">Dark</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Outline Buttons -->

    <!-- Outline Rounded Buttons -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Outline Rounded Buttons</h5>
                    </div>

                    <button type="button" class="btn btn-outline-primary rounded mt-2 mr-2">Primary</button>
                    <button type="button" class="btn btn-outline-secondary rounded mt-2 mr-2">Secondary</button>
                    <button type="button" class="btn btn-outline-success rounded mt-2 mr-2">Success</button>
                    <button type="button" class="btn btn-outline-danger rounded mt-2 mr-2">Danger</button>
                    <button type="button" class="btn btn-outline-warning rounded mt-2 mr-2">Warning</button>
                    <button type="button" class="btn btn-outline-info rounded mt-2 mr-2">Info</button>
                    <button type="button" class="btn btn-outline-light rounded mt-2 mr-2">Light</button>
                    <button type="button" class="btn btn-outline-dark rounded mt-2 mr-2">Dark</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Outline Rounded Buttons -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Button Sizes</h5>
                    </div>

                    <h6 class="mt-3 mb-0">Large Button</h6>
                    <button type="button" class="btn btn-primary btn-lg rounded-0 mt-2 mr-2">Large Button</button>
                    <button type="button" class="btn btn-success btn-lg mt-2 mr-2">Large Button</button>
                    <button type="button" class="btn btn-secondary btn-lg rounded-pill mt-2 mr-2">Large Button</button>

                    <h6 class="mt-3 mb-0">Medium Button</h6>
                    <button type="button" class="btn btn-primary btn-md rounded-0 mt-2 mr-2">Medium Button</button>
                    <button type="button" class="btn btn-success btn-md mt-2 mr-2">Medium Button</button>
                    <button type="button" class="btn btn-secondary btn-md rounded-pill mt-2 mr-2">Medium Button</button>

                    <h6 class="mt-3 mb-0">Small Button</h6>
                    <button type="button" class="btn btn-primary btn-sm rounded-0 mt-2 mr-2">Small Button</button>
                    <button type="button" class="btn btn-success btn-sm mt-2 mr-2">Small Button</button>
                    <button type="button" class="btn btn-secondary btn-sm rounded-pill mt-2 mr-2">Small Button</button>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-header mb-3">
                        <h5 class="card-title">Block Buttons</h5>
                    </div>

                    <button type="button" class="btn btn-primary btn-block btn-lg mt-3 rounded-pill">Block level button</button>
                    <button type="button" class="btn btn-success btn-block btn-lg mt-3 rounded-pill">Block level button</button>
                    <button type="button" class="btn btn-secondary btn-block btn-lg mt-3 rounded-pill">Block level button</button>
                    <button type="button" class="btn btn-outline-info btn-block btn-lg mt-3 rounded-pill">Block level button</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">State Button</h5>
                    </div>

                    <button type="button" class="btn active btn-primary btn-lg mt-2 mr-2 rounded-pill">Primary Button</button>
                    <button type="button" class="btn active btn-secondary btn-lg mt-2 mr-2 rounded-pill">Button</button>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Disabled State Button</h5>
                    </div>

                    <button type="button" class="btn btn-primary btn-lg mt-2 mr-2 rounded-pill disabled">Primary button</button>
                    <button type="button" class="btn btn-secondary btn-lg mt-2 mr-2 rounded-pill disabled">Button</button>
                    <a href="#" class="btn btn-secondary btn-lg rounded-pill disabled mt-2 mr-2">Link</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Button Groups</h5>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Left</button>
                        <button type="button" class="btn btn-primary">Middle</button>
                        <button type="button" class="btn btn-primary">Right</button>
                    </div>

                    <h6 class="mt-4">Button toolbar</h6>
                    <div class="btn-toolbar">
                        <div class="mr-2 btn-group">
                            <button type="button" class="btn btn-primary">1</button>
                            <button type="button" class="btn btn-primary">2</button>
                            <button type="button" class="btn btn-primary">3</button>
                            <button type="button" class="btn btn-primary">4</button>
                        </div>

                        <div class="mr-2 btn-group">
                            <button type="button" class="btn btn-primary">5</button>
                            <button type="button" class="btn btn-primary">6</button>
                            <button type="button" class="btn btn-primary">7</button>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">8</button>
                        </div>
                    </div>

                    <h6 class="mt-4">Sizing</h6>
                    <div role="group" class="btn-group btn-group-lg">
                        <button type="button" class="btn btn-primary">Left</button>
                        <button type="button" class="btn btn-primary">Middle</button>
                        <button type="button" class="btn btn-primary">Right</button>
                    </div>
                    <br>
                    <div role="group" class="mt-3 btn-group btn-group-md">
                        <button type="button" class="btn btn-primary">Left</button>
                        <button type="button" class="btn btn-primary">Middle</button>
                        <button type="button" class="btn btn-primary">Right</button>
                    </div>
                    <br>
                    <div role="group" class="mt-3 btn-group btn-group-sm">
                        <button type="button" class="btn btn-primary">Left</button>
                        <button type="button" class="btn btn-primary">Middle</button>
                        <button type="button" class="btn btn-primary">Right</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Nesting Groups</h5>
                    </div>

                    <h6>Nesting</h6>
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-primary">1</button>
                        <button type="button" class="btn btn-primary">2</button>

                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="#">Dropdown link</a>
                                <a class="dropdown-item" href="#">Dropdown link</a>
                            </div>
                        </div>
                    </div>

                    <h6 class="mt-4">Vertical variation</h6>
                    <div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-primary">1</button>
                        <button type="button" class="btn btn-primary">2</button>

                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop2" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop2">
                                <a class="dropdown-item" href="#">Dropdown link</a>
                                <a class="dropdown-item" href="#">Dropdown link</a>
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary">1</button>
                        <button type="button" class="btn btn-primary">2</button>

                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop3" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
                                <a class="dropdown-item" href="#">Dropdown link</a>
                                <a class="dropdown-item" href="#">Dropdown link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
