@extends('layouts.app')
@section('content')
      <!-- Main section-->
      <main class="main-container">
        <!-- Page content-->
        <section class="section-container">
          <div class="container-fluid">
            <h5 class="mt-0">Create a new post</h5>
            <div class="cardbox">
              <div class="cardbox-body">
                <form method="get" action="/">
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">With help</label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text"><span class="form-text text-muted">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="input-id-1">Label focus</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="input-id-1" type="text">
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">Password</label>
                      <div class="col-lg-10">
                        <input class="form-control" type="password" name="password">
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">Placeholder</label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" placeholder="placeholder">
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">Disabled</label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" placeholder="Disabled input here..." disabled="">
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">Static control</label>
                      <div class="col-lg-10">
                        <p class="form-control-plaintext">email@example.com</p>
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">Checkboxes and radios</label>
                      <div class="col-lg-10">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="">Option one is this and that—be sure to include why it's great
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" id="optionsRadios1" type="radio" name="optionsRadios" value="option1" checked="">Option one is this and that—be sure to include why it's great
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" id="optionsRadios2" type="radio" name="optionsRadios" value="option2">Option two can be something else and selecting it will deselect option one
                          </label>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">Inline checkboxes</label>
                      <div class="col-lg-10">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" id="inlineCheckbox1" type="checkbox" value="option1"> a
                          </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" id="inlineCheckbox2" type="checkbox" value="option2"> b
                          </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" id="inlineCheckbox3" type="checkbox" value="option3"> c
                          </label>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <fieldset class="last-child">
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">Select</label>
                      <div class="col-lg-10">
                        <select class="form-control" name="account">
                          <option>Option 1</option>
                          <option>Option 2</option>
                          <option>Option 3</option>
                          <option>Option 4</option>
                        </select><br>
                        <div class="row">
                          <div class="col-lg-4">
                            <select class="form-control" multiple="">
                              <option>Option 1</option>
                              <option>Option 2</option>
                              <option>Option 3</option>
                              <option>Option 4</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">Input valid</label>
                      <div class="col-lg-10">
                        <input class="form-control is-valid" id="inputSuccess1" type="text">
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">Input invalid</label>
                      <div class="col-lg-10">
                        <input class="form-control is-invalid" id="inputDanger1" type="text">
                        <div class="invalid-feedback">Sorry, that username&apos;s taken. Try another?</div>
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">Custom controls</label>
                      <div class="col-lg-10">
                        <p>Checkboxes</p>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" id="customCheck1" type="checkbox">
                          <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                        </div>
                        <p class="mt-3">Radios</p>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" id="customRadio1" type="radio" name="customRadio">
                          <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" id="customRadio2" type="radio" name="customRadio">
                          <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                        </div>
                        <p class="mt-3">Select</p>
                        <select class="custom-select">
                          <option selected="">Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <p class="mt-3">Range</p>
                        <input class="custom-range" id="customRange1" type="range">
                        <p class="mt-3">File</p>
                        <div class="custom-file">
                          <input class="custom-file-input" id="customFile" type="file">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">Control sizing</label>
                      <div class="col-lg-10">
                        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg"><br>
                        <input class="form-control" type="text" placeholder="Default input"><br>
                        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">Column sizing</label>
                      <div class="col-lg-10">
                        <div class="row">
                          <div class="col-lg-2">
                            <input class="form-control" type="text" placeholder=".col-lg-2">
                          </div>
                          <div class="col-lg-3">
                            <input class="form-control" type="text" placeholder=".col-lg-3">
                          </div>
                          <div class="col-lg-4">
                            <input class="form-control" type="text" placeholder=".col-lg-4">
                          </div>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">Input groups</label>
                      <div class="col-lg-10">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">@</span></div>
                          <input class="form-control" type="text" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                          <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                          <div class="input-group-append"><span class="input-group-text" id="basic-addon2">@example.com</span></div>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                          <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)">
                          <div class="input-group-append"><span class="input-group-text">.00</span></div>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input class="form-control" type="text" aria-label="Text input with checkbox">
                        </div>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <input type="radio" aria-label="Radio button for following text input">
                            </div>
                          </div>
                          <input class="form-control" type="text" aria-label="Text input with radio button">
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">Button addons</label>
                      <div class="col-lg-10">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                          </div>
                          <input class="form-control" type="text" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                          <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-success" type="button">Go!</button>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <button class="btn btn-primary" type="button"><em class="ion-person"></em></button>
                          </div>
                          <input class="form-control" type="text" placeholder="" aria-label="" aria-describedby="basic-addon1">
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="button"><em class="ion-person-stalker"></em></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">Multiple addons</label>
                      <div class="col-lg-10">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend"><span class="input-group-text">$</span><span class="input-group-text">0.00</span></div>
                              <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="input-group">
                              <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)">
                              <div class="input-group-append"><span class="input-group-text">$</span><span class="input-group-text">0.00</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">With dropdowns</label>
                      <div class="col-lg-10">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                              <div class="dropdown-divider" role="separator"></div><a class="dropdown-item" href="#">Separated link</a>
                            </div>
                          </div>
                          <input class="form-control" type="text" aria-label="Text input with dropdown button">
                        </div>
                        <div class="input-group">
                          <input class="form-control" type="text" aria-label="Text input with dropdown button">
                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                              <div class="dropdown-divider" role="separator"></div><a class="dropdown-item" href="#">Separated link</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-2 col-form-label">Segmented</label>
                      <div class="col-lg-10">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="button">Action</button>
                            <button class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                              <div class="dropdown-divider" role="separator"></div><a class="dropdown-item" href="#">Separated link</a>
                            </div>
                          </div>
                          <input class="form-control" type="text" aria-label="Text input with segmented dropdown button">
                        </div>
                        <div class="input-group">
                          <input class="form-control" type="text" aria-label="Text input with segmented dropdown button">
                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">Action</button>
                            <button class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                              <div class="dropdown-divider" role="separator"></div><a class="dropdown-item" href="#">Separated link</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </section>
        <!-- Page footer-->
        <footer class="footer-container">
          <div class="d-flex justify-content-between fh"><a class="footer-icon" href="#"><em class="ion-chatboxes"></em><span>Messages</span></a><a class="footer-icon" href="#"><em class="ion-document-text"></em><span>Widgets</span></a><a class="footer-icon footer-icon-lg" href="#"><em class="ion-home"></em><span>Dashboard</span></a><a class="footer-icon" href="#"><em class="ion-map"></em><span>Maps</span></a><a class="footer-icon" href="#"><em class="ion-pie-graph"></em><span>Charts</span></a></div>
        </footer>
      </main>
    </div>
    <!-- Search template-->
    <div class="modal modal-top fade modal-search" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <div class="modal-search-form">
              <form action="#">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button class="btn btn-flat" type="button" data-dismiss="modal"><em class="ion-arrow-left-c icon-lg text-muted"></em></button>
                  </div>
                  <input class="form-control header-input-search" type="text" placeholder="Search..">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Search template-->
    <!-- Settings template-->
    <div class="modal-settings modal modal-right fade" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="mt-0 modal-title"><span>Settings</span></h4>
            <div class="float-right clickable" data-dismiss="modal"><em class="ion-close-round text-soft"></em></div>
          </div>
          <div class="modal-body">
            <p>Dark sidebar</p>
            <div class="d-flex flex-wrap mb-3">
              <div class="setting-color">
                <label class="preview-theme-default">
                  <input type="radio" checked name="setting-theme" value="theme-default"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-2">
                  <input type="radio" name="setting-theme" value="theme-2"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-3">
                  <input type="radio" name="setting-theme" value="theme-3"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-4">
                  <input type="radio" name="setting-theme" value="theme-4"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-5">
                  <input type="radio" name="setting-theme" value="theme-5"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-6">
                  <input type="radio" name="setting-theme" value="theme-6"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
            </div>
            <p>White sidebar</p>
            <div class="d-flex flex-wrap mb-3">
              <div class="setting-color">
                <label class="preview-theme-default">
                  <input type="radio" name="setting-theme" value="theme-default-w"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-2">
                  <input type="radio" name="setting-theme" value="theme-2-w"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-3">
                  <input type="radio" name="setting-theme" value="theme-3-w"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-4">
                  <input type="radio" name="setting-theme" value="theme-4-w"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-5">
                  <input type="radio" name="setting-theme" value="theme-5-w"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-6">
                  <input type="radio" name="setting-theme" value="theme-6-w"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
            </div>
            <p>Sidebar Gradients</p>
            <div class="d-flex flex-wrap mb-3">
              <div class="setting-color">
                <label class="preview-theme-gradient-1">
                  <input type="radio" name="setting-theme" value="theme-gradient-sidebar-1"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-gradient-2">
                  <input type="radio" name="setting-theme" value="theme-gradient-sidebar-2"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-gradient-3">
                  <input type="radio" name="setting-theme" value="theme-gradient-sidebar-3"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-gradient-4">
                  <input type="radio" name="setting-theme" value="theme-gradient-sidebar-4"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-gradient-5">
                  <input type="radio" name="setting-theme" value="theme-gradient-sidebar-5"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-gradient-6">
                  <input type="radio" name="setting-theme" value="theme-gradient-sidebar-6"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
            </div>
            <p>Header Gradients</p>
            <div class="d-flex flex-wrap mb-3">
              <div class="setting-color">
                <label class="preview-theme-gradient-1">
                  <input type="radio" name="setting-theme" value="theme-gradient-header-1"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-gradient-2">
                  <input type="radio" name="setting-theme" value="theme-gradient-header-2"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-gradient-3">
                  <input type="radio" name="setting-theme" value="theme-gradient-header-3"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-gradient-4">
                  <input type="radio" name="setting-theme" value="theme-gradient-header-4"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-gradient-5">
                  <input type="radio" name="setting-theme" value="theme-gradient-header-5"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-gradient-6">
                  <input type="radio" name="setting-theme" value="theme-gradient-header-6"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
            </div>
            <p>Dark content</p>
            <div class="d-flex flex-wrap mb-3">
              <div class="setting-color">
                <label class="preview-theme-dark">
                  <input type="radio" name="setting-theme" value="theme-dark"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-dark-2">
                  <input type="radio" name="setting-theme" value="theme-dark-2"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
                </label>
              </div>
            </div>
            <hr>
            <div class="custom-control custom-checkbox mb-3">
              <input class="custom-control-input" id="sidebar-cover" type="checkbox">
              <label class="custom-control-label" for="sidebar-cover">Sidebar Cover</label>
            </div>
            <div class="custom-control custom-checkbox mb-3">
              <input class="custom-control-input" id="sidebar-showtoolbar" type="checkbox" checked>
              <label class="custom-control-label" for="sidebar-showtoolbar">Sidebar profile</label>
            </div>
            <div class="custom-control custom-checkbox mb-3">
              <input class="custom-control-input" id="fixed-footer" type="checkbox">
              <label class="custom-control-label" for="fixed-footer">Fixed Footer</label>
            </div>
            <hr>
            <button class="btn btn-secondary" type="button" data-toggle-fullscreen="">Toggle fullscreen</button>
            <hr>
            <p>Change language</p>
            <!-- START Language list-->
            <select class="language-select custom-select form-control">
              <option value="en" selected="">English</option>
              <option value="es">Spanish</option>
              <option value="fr">French</option>
            </select>
            <!-- END Language list-->
            <div class="mt-3" data-localize="translate.EXAMPLE">This is an example text using English as selected language.</div>
          </div>
        </div>
      </div>
    </div>
    {{-- <!-- End Settings template-->
    <!-- Modernizr-->
    <script src="vendor/modernizr/modernizr.custom.js"></script>
    <!-- PaceJS-->
    <script src="vendor/pace-progress/pace.min.js"></script>
    <!-- jQuery-->
    <script src="vendor/jquery/dist/jquery.js"></script>
    <!-- Bootstrap-->
    <script src="vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/dist/js/bootstrap.js"></script>
    <!-- Material Colors-->
    <script src="vendor/material-colors/dist/colors.js"></script>
    <!-- Screenfull-->
    <script src="vendor/screenfull/dist/screenfull.js"></script>
    <!-- jQuery Localize-->
    <script src="vendor/jquery-localize/dist/jquery.localize.js"></script>
    <!-- App script-->
    <script src="js/app.js"></script> --}}
@endsection