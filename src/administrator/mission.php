<!doctype html>
<html lang="en">
    <?php
            include 'head.php';
    ?>
    <body>
        
        <?php
            include 'header.php';
        ?>
        
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Missions</b></h2>
                        </div>
                            <div class="col-sm-6">
                                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Mission</span></a>
                                <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
                            </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <span class="custom-checkbox">
                                        <input type="checkbox" id="selectAll">
                                        <label for="selectAll"></label>
                                </span>
                            </th>
                            <th>Status</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Purpose</th>
                            <th>Employee</th>
                            <th>Manager</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                    <label for="checkbox1"></label>
                                </span>
                            </td>
                            <td>Thomas Hardy</td>
                            <td>05/05/17</td>
                            <td>05/12/17</td>
                            <td>Purpose is a quite big text</td>
                            <td>Employee Name</td>
                            <td>Manager Name</td>
                            <td>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>1</b> out of <b>1</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item "><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
      
        <!-- Edit Modal HTML -->
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">Add Mission</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">	
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Start Date</label>
                                <input type="date" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>End Date</label>
                                <input type="date" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Purpose</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="formEmployeeSelect">Employee</label>
                                <select class="form-control" id="formEmployeeSelect">
                                    <option>Name 1</option>
                                    <option>Name 2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="formManagerSelect">Manager</label>
                                <select class="form-control" id="formManagerSelect">
                                    <option>Name 1</option>
                                    <option>Name 2</option>
                                </select>
                            </div>					
                        </div>
                        <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-success" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                                <h4 class="modal-title">Edit Employee</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Start Date</label>
                                <input type="date" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>End Date</label>
                                <input type="date" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Purpose</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="formEmployeeSelect">Employee</label>
                                <select class="form-control" id="formEmployeeSelect">
                                    <option>Name 1</option>
                                    <option>Name 2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="formManagerSelect">Manager</label>
                                <select class="form-control" id="formManagerSelect">
                                    <option>Name 1</option>
                                    <option>Name 2</option>
                                </select>
                            </div>					
                        </div>
                        <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-info" value="Save">
                        </div>
                    </form>
                </div>
            </div>
	</div>
        
        <!-- Delete Modal HTML -->
        <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">Delete Mission</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <p>Are you sure you want to delete these Records?</p>
                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>
  
    </body>

</html>


