@extends('home.layouts.main')

@section('container')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-6 col-lg-4 order-0 mb-4">
            <div class="card">
              <h5 class="card-header">Search</h5>
              <div class="card-body">
                <label for="defaultFormControlInput" class="form-label">ODC Name</label>



                      <form action="/searchodc">

                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif
            
                        <div class="input-group mb-3">
                        <input type="text" class="form-control border-secondary" name="s1" value="ODC" readonly/>
                        
                        <select class="form-select border-secondary" name="s2" required>
                            <option selected></option>
                            <option value="PKM">PKM</option>
                            <option value="SMN">SMN</option>
                            <option value="KLS">KLS</option>
                            <option value="GOD">GOD</option>
                            <option value="KBU">KBU</option>
                            <option value="KEN">KEN</option>
                            <option value="BBS">BBS</option>
                            <option value="KGD">KGD</option>
                            <option value="BTL">BTL</option>
                            <option value="WTS">WTS</option>
                            <option value="WNS">WNS</option>
                          </select>
                        
                        <input type="text" aria-label="Odc name" class="form-control border-secondary text-secondary" name="s3" required/>
                            {{-- <input type="text" 
                            class="form-control" 
                            placeholder="Search.." 
                            name="search" 
                            value="{{ request('search') }}"> --}}

                            <button class="btn btn-secondary" type="submit"><i class="bx bx-search"></i></button>
                          </div>
                    </form>

                      <div id="defaultFormControlHelp" class="form-text">
                        Example : ODC-KBU-FBB 
                      </div>
              </div>
            </div>
        </div>

        
    

    <!-- Responsive Table -->
    <div class="col-lg-8 mb-4 order-1">
    <div class="card">
        <h5 class="card-header">ODC-KBU-FBB</h5>
        <div class="table-responsive text-nowrap">
          <table class="table table-hover table-bordered">
            {{-- <thead class="text-center">
                <tr>
                  <th scope="col" colspan="13"></th>
                  
                </tr>
              </thead> --}}
              <tbody>
                <tr>
                  <td class="bg-dark text-white">OTB-A</td>
                  <td class="text-center bg-success"><a href="#" class="text-dark"><b>1</a></td>
                  <td class="text-center"><a href="#">2</a></td>
                  <td class="text-center"><a href="#">3</a></td>
                  <td class="text-center"><a href="#">4</a></td>
                  <td class="text-center"><a href="#">5</a></td>
                  <td class="text-center"><a href="#">6</a></td>
                  <td class="text-center bg-danger"><a href="#" class="text-dark"><b>7</a></td>
                  <td class="text-center"><a href="#">8</a></td>
                  <td class="text-center"><a href="#">9</a></td>
                  <td class="text-center"><a href="#">10</a></td>
                  <td class="text-center"><a href="#">11</a></td>
                  <td class="text-center"><a href="#">12</a></td>
                  <td class="bg-dark text-white"></td>
                </tr>
                <tr class="bg-secondary">
                  <td colspan="14"></td>
                  
                </tr>
                <tr>
                  <td class="bg-dark text-white">OTB-B</td>
                  <td class="text-center"><a href="#">1</a></td>
                  <td class="text-center"><a href="#">2</a></td>
                  <td class="text-center"><a href="#">3</a></td>
                  <td class="text-center"><a href="#">4</a></td>
                  <td class="text-center"><a href="#">5</a></td>
                  <td class="text-center"><a href="#">6</a></td>
                  <td class="text-center"><a href="#">7</a></td>
                  <td class="text-center"><a href="#">8</a></td>
                  <td class="text-center"><a href="#">9</a></td>
                  <td class="text-center"><a href="#">10</a></td>
                  <td class="text-center"><a href="#">11</a></td>
                  <td class="text-center"><a href="#">12</a></td>
                  <td class="bg-dark text-white"></td>
                </tr>
                <tr class="bg-secondary">
                  <td colspan="14"></td>
                </tr>
                <tr>
                  <td class="bg-dark text-white">OTB-C</td>
                  <td class="text-center"><a href="#">1</a></td>
                  <td class="text-center"><a href="#">2</a></td>
                  <td class="text-center"><a href="#">3</a></td>
                  <td class="text-center"><a href="#">4</a></td>
                  <td class="text-center"><a href="#">5</a></td>
                  <td class="text-center"><a href="#">6</a></td>
                  <td class="text-center"><a href="#">7</a></td>
                  <td class="text-center"><a href="#">8</a></td>
                  <td class="text-center"><a href="#">9</a></td>
                  <td class="text-center"><a href="#">10</a></td>
                  <td class="text-center"><a href="#">11</a></td>
                  <td class="text-center"><a href="#">12</a></td>
                  <td class="bg-dark text-white"></td>
                </tr>
                <tr class="bg-secondary">
                  <td colspan="14"></td>
                </tr>
                <tr>
                  <td class="bg-dark text-white">OTB-D</td>
                  <td class="text-center"><a href="#">1</a></td>
                  <td class="text-center"><a href="#">2</a></td>
                  <td class="text-center"><a href="#">3</a></td>
                  <td class="text-center"><a href="#">4</a></td>
                  <td class="text-center"><a href="#">5</a></td>
                  <td class="text-center"><a href="#">6</a></td>
                  <td class="text-center"><a href="#">7</a></td>
                  <td class="text-center"><a href="#">8</a></td>
                  <td class="text-center"><a href="#">9</a></td>
                  <td class="text-center"><a href="#">10</a></td>
                  <td class="text-center"><a href="#">11</a></td>
                  <td class="text-center"><a href="#">12</a></td>
                  <td class="bg-dark text-white"></td>
                </tr>
                <tr class="bg-secondary">
                  <td colspan="14"></td>
                </tr>
                <tr>
                  <td class="bg-dark text-white">OTB-E</td>
                  <td class="text-center"><a href="#">1</a></td>
                  <td class="text-center"><a href="#">2</a></td>
                  <td class="text-center"><a href="#">3</a></td>
                  <td class="text-center"><a href="#">4</a></td>
                  <td class="text-center"><a href="#">5</a></td>
                  <td class="text-center"><a href="#">6</a></td>
                  <td class="text-center"><a href="#">7</a></td>
                  <td class="text-center"><a href="#">8</a></td>
                  <td class="text-center"><a href="#">9</a></td>
                  <td class="text-center"><a href="#">10</a></td>
                  <td class="text-center"><a href="#">11</a></td>
                  <td class="text-center"><a href="#">12</a></td>
                  <td class="bg-dark text-white"></td>
                </tr>
                <tr class="bg-secondary">
                    <td colspan="14"></td>
                  </tr>
                <tr>
                  <td class="bg-dark text-white">OTB-F</td>
                  <td class="text-center"><a href="#">1</a></td>
                  <td class="text-center"><a href="#">2</a></td>
                  <td class="text-center"><a href="#">3</a></td>
                  <td class="text-center"><a href="#">4</a></td>
                  <td class="text-center"><a href="#">5</a></td>
                  <td class="text-center"><a href="#">6</a></td>
                  <td class="text-center"><a href="#">7</a></td>
                  <td class="text-center"><a href="#">8</a></td>
                  <td class="text-center"><a href="#">9</a></td>
                  <td class="text-center"><a href="#">10</a></td>
                  <td class="text-center"><a href="#">11</a></td>
                  <td class="text-center"><a href="#">12</a></td>
                  <td class="bg-dark text-white"></td>
                </tr>
                <tr class="bg-secondary">
                    <td colspan="14"></td>
                  </tr>
                <tr>
                  <td class="bg-dark text-white">OTB-G</td>
                  <td class="text-center"><a href="#">1</a></td>
                  <td class="text-center"><a href="#">2</a></td>
                  <td class="text-center"><a href="#">3</a></td>
                  <td class="text-center"><a href="#">4</a></td>
                  <td class="text-center"><a href="#">5</a></td>
                  <td class="text-center"><a href="#">6</a></td>
                  <td class="text-center"><a href="#">7</a></td>
                  <td class="text-center"><a href="#">8</a></td>
                  <td class="text-center"><a href="#">9</a></td>
                  <td class="text-center"><a href="#">10</a></td>
                  <td class="text-center"><a href="#">11</a></td>
                  <td class="text-center"><a href="#">12</a></td>
                  <td class="bg-dark text-white"></td>
                </tr>
                <tr class="bg-secondary">
                    <td colspan="14"></td>
                  </tr>
                <tr>
                  <td class="bg-dark text-white">OTB-H</td>
                  <td class="text-center"><a href="#">1</a></td>
                  <td class="text-center"><a href="#">2</a></td>
                  <td class="text-center"><a href="#">3</a></td>
                  <td class="text-center"><a href="#">4</a></td>
                  <td class="text-center"><a href="#">5</a></td>
                  <td class="text-center"><a href="#">6</a></td>
                  <td class="text-center"><a href="#">7</a></td>
                  <td class="text-center"><a href="#">8</a></td>
                  <td class="text-center"><a href="#">9</a></td>
                  <td class="text-center"><a href="#">10</a></td>
                  <td class="text-center"><a href="#">11</a></td>
                  <td class="text-center"><a href="#">12</a></td>
                  <td class="bg-dark text-white"></td>
                </tr>
                <tr class="bg-secondary">
                    <td colspan="14"></td>
                  </tr>
                <tr>
                  <td class="bg-dark text-white">OTB-I</td>
                  <td class="text-center"><a href="#">1</a></td>
                  <td class="text-center"><a href="#">2</a></td>
                  <td class="text-center"><a href="#">3</a></td>
                  <td class="text-center"><a href="#">4</a></td>
                  <td class="text-center"><a href="#">5</a></td>
                  <td class="text-center"><a href="#">6</a></td>
                  <td class="text-center"><a href="#">7</a></td>
                  <td class="text-center"><a href="#">8</a></td>
                  <td class="text-center"><a href="#">9</a></td>
                  <td class="text-center"><a href="#">10</a></td>
                  <td class="text-center"><a href="#">11</a></td>
                  <td class="text-center"><a href="#">12</a></td>
                  <td class="bg-dark text-white"></td>
                </tr>
                <tr class="bg-secondary">
                    <td colspan="14"></td>
                  </tr>
                <tr>
                  <td class="bg-dark text-white">OTB-J</td>
                  <td class="text-center"><a href="#">1</a></td>
                  <td class="text-center"><a href="#">2</a></td>
                  <td class="text-center"><a href="#">3</a></td>
                  <td class="text-center"><a href="#">4</a></td>
                  <td class="text-center"><a href="#">5</a></td>
                  <td class="text-center"><a href="#">6</a></td>
                  <td class="text-center"><a href="#">7</a></td>
                  <td class="text-center"><a href="#">8</a></td>
                  <td class="text-center"><a href="#">9</a></td>
                  <td class="text-center"><a href="#">10</a></td>
                  <td class="text-center"><a href="#">11</a></td>
                  <td class="text-center"><a href="#">12</a></td>
                  <td class="bg-dark text-white"></td>
                </tr>
                <tr class="bg-secondary">
                    <td colspan="14"></td>
                  </tr>
                <tr>
                  <td class="bg-dark text-white">OTB-K</td>
                  <td class="text-center"><a href="#">1</a></td>
                  <td class="text-center"><a href="#">2</a></td>
                  <td class="text-center"><a href="#">3</a></td>
                  <td class="text-center"><a href="#">4</a></td>
                  <td class="text-center"><a href="#">5</a></td>
                  <td class="text-center"><a href="#">6</a></td>
                  <td class="text-center"><a href="#">7</a></td>
                  <td class="text-center"><a href="#">8</a></td>
                  <td class="text-center"><a href="#">9</a></td>
                  <td class="text-center"><a href="#">10</a></td>
                  <td class="text-center"><a href="#">11</a></td>
                  <td class="text-center"><a href="#">12</a></td>
                  <td class="bg-dark text-white"></td>
                </tr>
                <tr class="bg-secondary">
                    <td colspan="14"></td>
                  </tr>
                <tr>
                  <td class="bg-dark text-white">OTB-L</td>
                  <td class="text-center"><a href="#">1</a></td>
                  <td class="text-center"><a href="#">2</a></td>
                  <td class="text-center"><a href="#">3</a></td>
                  <td class="text-center"><a href="#">4</a></td>
                  <td class="text-center"><a href="#">5</a></td>
                  <td class="text-center"><a href="#">6</a></td>
                  <td class="text-center"><a href="#">7</a></td>
                  <td class="text-center"><a href="#">8</a></td>
                  <td class="text-center"><a href="#">9</a></td>
                  <td class="text-center"><a href="#">10</a></td>
                  <td class="text-center"><a href="#">11</a></td>
                  <td class="text-center"><a href="#">12</a></td>
                  <td class="bg-dark text-white"></td>
                </tr>
              </tbody>
              <tfoot class="text-center">
                <tr>
                  <th scope="col" colspan="14">ODC-KBU-FBB</th>
                  
                </tr>
              </tfoot>
          </table>
        </div>
    </div>
      </div>
    
      <!--/ Responsive Table -->
    </div>
</div>

  @endsection