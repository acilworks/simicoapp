@extends('home.layouts.main')

@section('container')

<div class="container-xxl flex-grow-1 container-p-y">
  <h5 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">
        ODC Main /
    </span>
        Add Data
  </h5>
    <div class="row">
        

    <!-- Responsive Table -->
    <div class="col-lg-8 mb-4 order-1">
    <div class="card">
        <h5 class="card-header">ODC Main</h5>
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