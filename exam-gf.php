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
<div class="row">
<div class="col-sm-12">
  <div class="card">
    <div class="card-header">
      <h5>SELECT CERTIFICATION</h5>
    </div>
    <div class="card-body">
      <!--Applied for start-->
      <form id="validation-form123" action="#!">
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label class="form-label">Grandfathering / Examination </label>
              <select class="form-control" id="ddl1" onchange="configureDropDownLists(this,document.getElementById('ddl2'))" required="required">
                <option value="" disabled selected>Select</option>
                <option value="grandfathering">Grandfathering</option>
                <option value="examination">Examination</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-label">Certifications</label>
              <select class="form-control" id="ddl2">
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label class="form-label">Select Exam Date</label>
              <select class="form-control" id="ddl23">
                <option value="" disabled selected>Select</option>
                <option value="examdt">30 Jan, 2023</option>
                <option value="examdt">27 March, 2023</option>
                <option value="examdt">29 May, 2023</option>
                <option value="examdt">31 July, 2023</option>
                <option value="examdt">25 September, 2023</option>
                <option value="examdt">27 November, 2023</option>
                <option value="examdt">None / Grandfathering</option>
              </select>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label class="form-label">Examination Centre</label>
              <select class="form-control" id="ddl223">
                <option value="" disabled selected>Select</option>
                <option value="examdt">Karachi</option>
                <option value="examdt">Lahore</option>
                <option value="examdt">Islamabad</option>
                <option value="examdt">Online</option>
                <option value="examdt">None / Grandfathering</option>
              </select>
            </div>
          </div>
        </div>
        <button type="submit" class="btn  btn-primary float-right ml-1">Add</button>
        <button type="submit" class="btn  btn-warning float-right">Update</button>
      </form>
      <!--Applied for start-->
    </div>
  </div>
</div>
<!--simple table for qualification start-->
 <div class="col-sm-12">
   <div class="card">
         <div class="card-header">
             <h5>LIST OF CERTIFICATION APPLIED</h5>
         </div>
         <div class="card-body table-border-style">
             <div class="table-responsive">
                 <table class="table table-bordered">
                     <thead>
                         <tr>
                             <th>CATEGORY</th>
                             <th>CERTIFICATION NAME</th>
                             <th>EXAM DATE</th>
                             <th>CENTER</th>
                             <th>STATUS</th>
                             <th class="text-center">ACTION</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>Grandfathering</td>
                             <td>Fundamentals of Capital Markets Certification (FCM)</td>
                             <td>29 May, 2022</td>
                             <td>Karachi</td>
                             <td>Pending</td>
                             <td class="text-center">
                               <a href="#" class="btn-warning btn-sm mrg" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="far fa-edit"></i></a>
                               <a href="#" onclick="return confirm('you are about to delete a record. This cannot be undone. are you sure?')" class="btn-danger btn-sm mrg" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="far fa-trash-alt"></i></a>
                             </td>
                         </tr>
                         <tr>
                             <td>Examination</td>
                             <td>Stock Brokers Certification</td>
                             <td>29 April, 2022</td>
                             <td>Karachi</td>
                             <td>Approved</td>
                             <td class="text-center">
                               <a href="#" class="btn-warning btn-sm mrg" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="far fa-edit"></i></a>
                               <a href="#" onclick="return confirm('you are about to delete a record. This cannot be undone. are you sure?')" class="btn-danger btn-sm mrg" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="far fa-trash-alt"></i></a>
                             </td>
                         </tr>
                         <tr>
                             <td>Grandfathering</td>
                             <td>Fundamentals of Capital Markets Certification (FCM)</td>
                             <td>29 May, 2022</td>
                             <td>Karachi</td>
                             <td>Submited</td>
                             <td class="text-center">
                               <a href="#" class="btn-warning btn-sm mrg" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="far fa-edit"></i></a>
                               <a href="#" onclick="return confirm('you are about to delete a record. This cannot be undone. are you sure?')" class="btn-danger btn-sm mrg" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="far fa-trash-alt"></i></a>
                             </td>
                         </tr>
                     </tbody>
                 </table>
                 <hr style="height:2px; width:100%; border-width:0; color:red; background-color:red">
                 <button type="submit" class="btn  btn-info float-right">Apply</button>
             </div>
         </div>
     </div>
 </div>
  <!--simple table for qualification end-->

</div>
</div>

<!--Java for Dependent Dropdown start-->
<script>
function configureDropDownLists(ddl1,ddl2) {
  var grandfathering =
    [
      'Fundamentals of Capital Markets Certification (FCM)',
      'Mutual Funds Distributor’s Certification (MFDC)',
      'Stock Brokers’ Certification (SBC)',
      'Pakistan’s Market Regulations Certification (PMR)',
      'Mutual Funds Basic Certification (MFBC)',
      'Commodity Brokers Certification (CBC)'
    ];
    var examination =
    [
      'Stock Brokers Certification',
      'Mutual Fund Distributors Certification',
      'Pakistan’s Market Regulations Certification',
      'Fundamentals of Capital Markets Certification',
      'Financial Advisors Certification',
      'Commodity Brokers Certification',
      'Financial Derivative Traders Certification',
      'Compliance Officers Certification',
      'Clearing and Settlement Operations Certification',
      'Risk Management Certification',
      'Investment Banking and Analysis Certification',
      'Islamic Finance Certification',
      'Capital Budgeting and Corporate Finance Certification',
      'Equity, Fixed Income and Derivatives Advisory Certification',
      'Financial Analysts Certification',
      'Mutual Fund Basics Certification',
      'Fixed Income Securities Certification',
      'AML/CFT Certification'
    ];

    switch (ddl1.value) {
        case 'grandfathering':
            ddl2.options.length = 0;
            for (i = 0; i < grandfathering.length; i++) {
                createOption(ddl2, grandfathering[i], grandfathering[i]);
            }
            break;
        case 'examination':
            ddl2.options.length = 0;
        for (i = 0; i < examination.length; i++) {
            createOption(ddl2, examination[i], examination[i]);
            }
            break;
            default:
                ddl2.options.length = 0;
            break;
    }

}

    function createOption(ddl, text, value) {
        var opt = document.createElement('option');
        opt.value = value;
        opt.text = text;
        ddl.options.add(opt);
    }
</script>
<!--Java for Dependent Dropdown end-->

<!--Modal Code Start-->
<div id="exampleModalLong" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Modal Title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn  btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!--Modal Code End-->



<!--Modal Script Start-->
<script>
	$('#exampleModal').on('show.bs.modal', function(event) {
		var button = $(event.relatedTarget)
		var recipient = button.data('whatever')
		var modal = $(this)
		modal.find('.modal-title').text('New message to ' + recipient)
		modal.find('.modal-body input').val(recipient)
	})
</script>
<!--Modal Script End-->





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
