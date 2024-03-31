<!--Head Section Start-->
<?php
  include('layout/head.php');
?>
<!--Head Section End-->

<body class="">
 <!--Navigation Start-->
 <?php
     include('layout/navmenue.php');
  ?>
  <!--Navigation End-->
 <!--Header Start-->
 <?php
     include('layout/header.php');
  ?>
  <!--Header End-->

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
<div style="margin-top: 0px;" class="pcoded-content">
<!--Candidate Qualification form Start-->
<div class="row">
<div class="col-sm-12">
   <div class="card">
     <div class="card-header">
       <h5>WELCOME TO IFMP MEMBERSHIP</h5>
     </div>
     <div class="card-body">
       <div class="row">
         <div class="col-md-6">
           <div class="form-group">
             <p><strong>Accounts Title:</strong> INS OF FIN MKTS OF PK FRM INS OF CM</p>
           </div>
         </div>
         <div class="col-md-6">
           <div class="form-group">
             <p><strong>Bank Name:</strong> Al Falah</p>
           </div>
         </div>
         <div class="col-md-6">
           <div class="form-group">
             <p><strong>Account Number:</strong> 0012-1003289373</p>
           </div>
         </div>
         <div class="col-md-6">
           <div class="form-group">
             <p><strong>IBAN Number:</strong> PK63ALFH00120010032893733</p>
           </div>
         </div>
         <div class="col-md-12 text-white bg-success">
             <strong>Note:</strong> Please attach a receipt.
         </div>
       </div>
     </div>
   </div>
 </div>
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h5>CANDIDATE MEMBERSHIP FEES STATUS</h5>
    </div>
    <div class="card-body table-border-style">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
               <th>SN</th>
               <th>Fees Details</th>
               <th>Amount</th>
               <th class="text-center">Status</th>
             </tr>
           </thead>
           <tbody>
             <tr>
                 <td>1</td>
                 <td>Membership 2022-23</td>
                 <td>5000</td>
                 <td class="text-center"><span class="badge badge-success">Paid</span></td>
             </tr>
             <tr>
                 <td>2</td>
                 <td>Membership 2023-24</td>
                 <td>5000</td>
                 <td class="text-center"><span class="badge badge-danger">UnPaid</span></td>
             </tr>
           </tbody>
        </table>
      </div>
      <button type="submit" class="btn  btn-primary float-right ml-1">View Invoice</button>
      <button type="submit" class="btn  btn-warning float-right">Pay Online</button>
    </div>
 </div>
</div>
<div class="col-sm-12">
     <div class="card">
       <div class="card-header">
       <h5>FEE SUBMISSIONS - PAYMENT DETAIL</h5>
       </div>
       <div class="card-body">
           <form id="validation-form123" action="#!">
               <div class="row">
                 <div class="col-md-3">
                     <div class="form-group">
                         <label class="form-label">Select Bank </label>
                         <select class="form-control" id="validation-gender" required="required">
                             <option value="" disabled selected>Select Bank</option>
                             <option>HBL</option>
                             <option>ABL</option>
                             <option>UBL</option>
                         </select>
                     </div>
                 </div>
                 <div class="col-md-2">
                     <div class="form-group">
                         <label class="form-label">Receipt Date </label>
                         <input type="date" class="form-control" id="Extend" placeholder="123" required>
                     </div>
                 </div>
                 <div class="col-md-2">
                     <div class="form-group">
                         <label class="form-label">Reference Number</label>
                         <input type="text" class="form-control" id="validation-fname" placeholder="Ref No" required>
                     </div>
                 </div>
                 <div class="col-md-2">
                     <div class="form-group">
                         <label class="form-label">Amount</label>
                         <input type="text" class="form-control" id="validation-fname" placeholder="Amount" required>
                     </div>
                 </div>
                 <div class="col-md-3">
                     <div class="form-group">
                         <label class="form-label">Upload Receipt </label>
                         <input type="file" class="form-control" id="Icon" placeholder="sdf" required>
                     </div>
                 </div>
               </div>
               <button type="submit" class="btn  btn-primary float-right ml-1">Add</button>
               <button type="submit" class="btn  btn-warning float-right">Update</button>
           </form>
        </div>
     </div>
</div>

<!--simple table for qualification start-->
 <div class="col-sm-12">
     <div class="card">
         <div class="card-header">
             <h5>PAID PAYMENT DETAIL</h5>
         </div>
         <div class="card-body table-border-style">
             <div class="table-responsive">
                 <table class="table table-bordered">
                     <thead>
                         <tr>
                             <th>Bank Name</th>
                             <th>Receipt Date</th>
                             <th>Reference Number</th>
                             <th>Amount</th>
                             <th>Paid Receipt</th>
                             <th class="text-center">Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>HBL Bank</td>
                             <td>02/03/2022</td>
                             <td>HBL-521545854</td>
                             <td>5000</td>
                             <td>image.jpg</td>
                             <td class="text-center">
                               <a href="#" class="btn-warning btn-sm mrg" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="far fa-edit"></i></a>
                               <a href="#" onclick="return confirm('you are about to delete a record. This cannot be undone. are you sure?')" class="btn-danger btn-sm mrg" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="far fa-trash-alt"></i></a>
                             </td>
                         </tr>
                         <tr>
                             <td>HBL Bank</td>
                             <td>02/03/2022</td>
                             <td>HBL-521545854</td>
                             <td>5000</td>
                             <td>image.jpg</td>
                             <td class="text-center">
                               <a href="#" class="btn-warning btn-sm mrg" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="far fa-edit"></i></a>
                               <a href="#" onclick="return confirm('you are about to delete a record. This cannot be undone. are you sure?')" class="btn-danger btn-sm mrg" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="far fa-trash-alt"></i></a>
                             </td>
                         </tr>
                     </tbody>
                 </table>
             </div>
            <button type="submit" class="btn  btn-info float-right" data-toggle="modal" data-target="#modal-report">Submit</button>
         </div>
     </div>
 </div>
<!--simple table for qualification end-->

<<?php
include('modal.php');
 ?>


<!--Candidate Qualification form Start-->
</div>
</div>
</section>
<!-- [ Main Content ] end -->
   <!-- Warning Section start -->
   <!-- Older IE warning message -->
   <!--[if lt IE 11]>
       <div class="ie-warning">
           <h1>Warning!!</h1>
           <p>You are using an outdated version of Internet Explorer, please upgrade
              <br/>to any of the following web browsers to access this website.
           </p>
           <div class="iew-container">
               <ul class="iew-download">
                   <li>
                       <a href="http://www.google.com/chrome/">
                           <img src="assets/images/browser/chrome.png" alt="Chrome">
                           <div>Chrome</div>
                       </a>
                   </li>
                   <li>
                       <a href="https://www.mozilla.org/en-US/firefox/new/">
                           <img src="assets/images/browser/firefox.png" alt="Firefox">
                           <div>Firefox</div>
                       </a>
                   </li>
                   <li>
                       <a href="http://www.opera.com">
                           <img src="assets/images/browser/opera.png" alt="Opera">
                           <div>Opera</div>
                       </a>
                   </li>
                   <li>
                       <a href="https://www.apple.com/safari/">
                           <img src="assets/images/browser/safari.png" alt="Safari">
                           <div>Safari</div>
                       </a>
                   </li>
                   <li>
                       <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                           <img src="assets/images/browser/ie.png" alt="">
                           <div>IE (11 & above)</div>
                       </a>
                   </li>
               </ul>
           </div>
           <p>Sorry for the inconvenience!</p>
       </div>
   <![endif]-->
   <!-- Warning Section Ends -->
   <!-- Required Js -->
   <script src="assets/js/vendor-all.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/ripple.js"></script>
   <script src="assets/js/pcoded.min.js"></script>
</body>
</html>
