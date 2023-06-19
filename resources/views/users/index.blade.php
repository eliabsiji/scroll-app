@extends('layouts.master')
@section('content')
    
 <!-- Content -->
        
 <div class="container-xxl flex-grow-1 container-p-y">
            
            

  <div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="avatar">
              <div class="avatar-initial bg-label-primary rounded">
                <div class="mdi mdi-account-outline mdi-24px"></div>
              </div>
            </div>
            <div class="ms-3">
              <div class="d-flex align-items-center">
                <h5 class="mb-0">8,458</h5>
                <div class="mdi mdi-chevron-down text-danger mdi-24px"></div>
                <small class="text-danger">8.1%</small>
              </div>
              <small class="text-muted">New Customers</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="avatar">
              <div class="avatar-initial bg-label-warning rounded">
                <div class="mdi mdi-poll mdi-24px"></div>
              </div>
            </div>
            <div class="ms-3">
              <div class="d-flex align-items-center">
                <h5 class="mb-0">$28.5K</h5>
                <div class="mdi mdi-chevron-up text-success mdi-24px"></div>
                <small class="text-success">18.2%</small>
              </div>
              <small class="text-muted">Total Profit</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="avatar">
              <div class="avatar-initial bg-label-info rounded">
                <div class="mdi mdi-trending-up mdi-24px"></div>
              </div>
            </div>
            <div class="ms-3">
              <div class="d-flex align-items-center">
                <h5 class="mb-0">2,450K</h5>
                <div class="mdi mdi-chevron-down text-danger mdi-24px"></div>
                <small class="text-danger">24.6%</small>
              </div>
              <small class="text-muted">New Transaction</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="avatar">
              <div class="avatar-initial bg-label-success rounded">
                <div class="mdi mdi-currency-usd mdi-24px"></div>
              </div>
            </div>
            <div class="ms-3">
              <div class="d-flex align-items-center">
                <h5 class="mb-0">$48.2K</h5>
                <div class="mdi mdi-chevron-down text-success mdi-24px"></div>
                <small class="text-success">22.5%</small>
              </div>
              <small class="text-muted">Total Revenue</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>
  <!-- Users List Table -->
  <div class="card">
    <div class="card-header">
      <h5 class="card-title">Search Filter</h5>
      <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
        <div class="col-md-4 user_role"></div>
        <div class="col-md-4 user_plan"></div>
        <div class="col-md-4 user_status"></div>
      </div>
    </div>
    <div class="card-datatable table-responsive">
      <table class="datatables-users table">
        <thead>
          <tr>
              <th>SN</th>
              <th>Arm</th>
              <th>Description</th>
              <th>Action</th>
              <th>Date Registered</th>
          </tr>
      </thead>
      <tbody>
     

          <tr >
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
          </tr>
          <tr >
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
        </tr>
        <tr >
          <td>2</td>
          <td>2</td>
          <td>1</td>
          <td>1</td>
          <td>1</td>
      </tr>


      </tbody>
  
      </table>
    </div>

    <div class="card-datatable table-responsive pt-0">
      <table class="datatables-basic table table-bordered">
        <thead>
          <tr>
            <th></th>
            <th></th>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Salary</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
      </table>
    </div>
    <!-- Offcanvas to add new user -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
      <div class="offcanvas-header">
        <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body mx-0 flex-grow-0">
        <form class="add-new-user pt-0" id="addNewUserForm" onsubmit="return false">
          <div class="form-floating form-floating-outline mb-4">
            <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe" name="userFullname" aria-label="John Doe" />
            <label for="add-user-fullname">Full Name</label>
          </div>
          <div class="form-floating form-floating-outline mb-4">
            <input type="text" id="add-user-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="userEmail" />
            <label for="add-user-email">Email</label>
          </div>
          <div class="form-floating form-floating-outline mb-4">
            <input type="text" id="add-user-contact" class="form-control phone-mask" placeholder="+1 (609) 988-44-11" aria-label="john.doe@example.com" name="userContact" />
            <label for="add-user-contact">Contact</label>
          </div>
          <div class="form-floating form-floating-outline mb-4">
            <input type="text" id="add-user-company" class="form-control" placeholder="Web Developer" aria-label="jdoe1" name="companyName" />
            <label for="add-user-company">Company</label>
          </div>
          <div class="form-floating form-floating-outline mb-4">
            <select id="country" class="select2 form-select">
              <option value="">Select</option>
              <option value="Australia">Australia</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Belarus">Belarus</option>
              <option value="Brazil">Brazil</option>
              <option value="Canada">Canada</option>
              <option value="China">China</option>
              <option value="France">France</option>
              <option value="Germany">Germany</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Japan">Japan</option>
              <option value="Korea">Korea, Republic of</option>
              <option value="Mexico">Mexico</option>
              <option value="Philippines">Philippines</option>
              <option value="Russia">Russian Federation</option>
              <option value="South Africa">South Africa</option>
              <option value="Thailand">Thailand</option>
              <option value="Turkey">Turkey</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select>
            <label for="country">Country</label>
          </div>
          <div class="form-floating form-floating-outline mb-4">
            <select id="user-role" class="form-select">
              <option value="subscriber">Subscriber</option>
              <option value="editor">Editor</option>
              <option value="maintainer">Maintainer</option>
              <option value="author">Author</option>
              <option value="admin">Admin</option>
            </select>
            <label for="user-role">User Role</label>
          </div>
          <div class="form-floating form-floating-outline mb-4">
            <select id="user-plan" class="form-select">
              <option value="basic">Basic</option>
              <option value="enterprise">Enterprise</option>
              <option value="company">Company</option>
              <option value="team">Team</option>
            </select>
            <label for="user-plan">Select Plan</label>
          </div>
          <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
          <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
        </form>
      </div>
    </div>
  </div>
  
  <script>

$(function () {
      'use strict';
    
      var dt_basic_table = $('.datatables-basic');
    
      // DataTable with buttons
      // --------------------------------------------------------------------
    
      if (dt_basic_table.length) {
        var dt_basic = dt_basic_table.DataTable({
          ajax: assetsPath + '/json/table-datatable.json',
          columns: [
            { data: '' },
            { data: 'id' },
            { data: 'id' },
            { data: 'full_name' },
            { data: 'email' },
            { data: 'start_date' },
            { data: 'salary' },
            { data: 'status' },
            { data: '' }
          ],
          columnDefs: [
            {
              // For Responsive
              className: 'control',
              orderable: false,
              responsivePriority: 2,
              searchable: false,
              targets: 0,
              render: function (data, type, full, meta) {
                return '';
              }
            },
            {
              // For Checkboxes
              targets: 1,
              orderable: false,
              responsivePriority: 3,
              searchable: false,
              checkboxes: true,
              render: function () {
                return '<input type="checkbox" class="dt-checkboxes form-check-input">';
              },
              checkboxes: {
                selectAllRender: '<input type="checkbox" class="form-check-input">'
              }
            },
            {
              targets: 2,
              searchable: false,
              visible: false
            },
            {
              // Avatar image/badge, Name and post
              targets: 3,
              responsivePriority: 4,
              render: function (data, type, full, meta) {
                var $user_img = full['avatar'],
                  $name = full['full_name'],
                  $post = full['post'];
                if ($user_img) {
                  // For Avatar image
                  var $output =
                    '<img src="' + assetsPath + '/img/avatars/' + $user_img + '" alt="Avatar" class="rounded-circle">';
                } else {
                  // For Avatar badge
                  var stateNum = Math.floor(Math.random() * 6);
                  var states = ['success', 'danger', 'warning', 'info', 'dark', 'primary', 'secondary'];
                  var $state = states[stateNum],
                    $name = full['full_name'],
                    $initials = $name.match(/\b\w/g) || [];
                  $initials = (($initials.shift() || '') + ($initials.pop() || '')).toUpperCase();
                  $output = '<span class="avatar-initial rounded-circle bg-label-' + $state + '">' + $initials + '</span>';
                }
                // Creates full output for row
                var $row_output =
                  '<div class="d-flex justify-content-start align-items-center">' +
                  '<div class="avatar-wrapper">' +
                  '<div class="avatar me-2">' +
                  $output +
                  '</div>' +
                  '</div>' +
                  '<div class="d-flex flex-column">' +
                  '<span class="emp_name text-truncate">' +
                  $name +
                  '</span>' +
                  '<small class="emp_post text-truncate text-muted">' +
                  $post +
                  '</small>' +
                  '</div>' +
                  '</div>';
                return $row_output;
              }
            },
            {
              responsivePriority: 1,
              targets: 4
            },
            {
              // Label
              targets: -2,
              render: function (data, type, full, meta) {
                var $status_number = full['status'];
                var $status = {
                  1: { title: 'Current', class: 'bg-label-primary' },
                  2: { title: 'Professional', class: ' bg-label-success' },
                  3: { title: 'Rejected', class: ' bg-label-danger' },
                  4: { title: 'Resigned', class: ' bg-label-warning' },
                  5: { title: 'Applied', class: ' bg-label-info' }
                };
                if (typeof $status[$status_number] === 'undefined') {
                  return data;
                }
                return (
                  '<span class="badge rounded-pill ' +
                  $status[$status_number].class +
                  '">' +
                  $status[$status_number].title +
                  '</span>'
                );
              }
            },
            {
              // Actions
              targets: -1,
              title: 'Actions',
              orderable: false,
              searchable: false,
              render: function (data, type, full, meta) {
                return (
                  '<div class="d-inline-block">' +
                  '<a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>' +
                  '<ul class="dropdown-menu dropdown-menu-end">' +
                  '<li><a href="javascript:;" class="dropdown-item">Details</a></li>' +
                  '<li><a href="javascript:;" class="dropdown-item">Archive</a></li>' +
                  '<div class="dropdown-divider"></div>' +
                  '<li><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a></li>' +
                  '</ul>' +
                  '</div>' +
                  '<a href="javascript:;" class="btn btn-sm btn-icon item-edit"><i class="mdi mdi-pencil-outline"></i></a>'
                );
              }
            }
          ],
          order: [[2, 'desc']],
          dom: '<"card-header"<"head-label text-center"><"dt-action-buttons text-end"B>><"d-flex justify-content-between align-items-center row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
          displayLength: 7,
          lengthMenu: [7, 10, 25, 50, 75, 100],
          buttons: [
            {
              extend: 'collection',
              className: 'btn btn-label-primary dropdown-toggle me-2',
              text: '<i class="mdi mdi-export-variant me-1"></i>Export',
              buttons: [
                {
                  extend: 'print',
                  text: '<i class="mdi mdi-printer-outline me-1" ></i>Print',
                  className: 'dropdown-item',
                  exportOptions: { columns: [3, 4, 5, 6, 7] }
                },
                {
                  extend: 'csv',
                  text: '<i class="mdi mdi-file-document-outline me-1" ></i>Csv',
                  className: 'dropdown-item',
                  exportOptions: { columns: [3, 4, 5, 6, 7] }
                },
                {
                  extend: 'excel',
                  text: '<i class="mdi mdi-file-excel-outline me-1"></i>Excel',
                  className: 'dropdown-item',
                  exportOptions: { columns: [3, 4, 5, 6, 7] }
                },
                {
                  extend: 'pdf',
                  text: '<i class="mdi mdi-file-pdf-box me-1"></i>Pdf',
                  className: 'dropdown-item',
                  exportOptions: { columns: [3, 4, 5, 6, 7] }
                },
                {
                  extend: 'copy',
                  text: '<i class="mdi mdi-content-copy me-1" ></i>Copy',
                  className: 'dropdown-item',
                  exportOptions: { columns: [3, 4, 5, 6, 7] }
                }
              ]
            },
            {
              text: '<i class="mdi mdi-plus me-1"></i> <span class="d-none d-lg-inline-block">Add New Record</span>',
              className: 'create-new btn btn-primary'
            }
          ],
          responsive: {
            details: {
              display: $.fn.dataTable.Responsive.display.modal({
                header: function (row) {
                  var data = row.data();
                  return 'Details of ' + data['full_name'];
                }
              }),
              type: 'column',
              renderer: function (api, rowIdx, columns) {
                var data = $.map(columns, function (col, i) {
                  return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
                    ? '<tr data-dt-row="' +
                        col.rowIndex +
                        '" data-dt-column="' +
                        col.columnIndex +
                        '">' +
                        '<td>' +
                        col.title +
                        ':' +
                        '</td> ' +
                        '<td>' +
                        col.data +
                        '</td>' +
                        '</tr>'
                    : '';
                }).join('');
    
                return data ? $('<table class="table"/><tbody />').append(data) : false;
              }
            }
          }
        });
        $('div.head-label').html('<h5 class="card-title mb-0">DataTable with Buttons</h5>');
      }
});
  </script>
              
            </div>
            <!-- / Content -->
  
@endsection          
          
