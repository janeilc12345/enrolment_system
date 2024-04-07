<?php

include "dbconn.php";

function displayStudents(){
    global $pdo; 

    $sql = "SELECT * FROM students";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // Output data of each row
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
            echo '<td>'.$row['lrn'].'</td>';
            echo '<td>'.$row['email'].'</td>';
            echo '<td>'.$row['firstname']. ' ' . $row['middlename'] . ' ' . $row['firstname']. '</td>';
            echo '<td>'.$row['birthdate'].'</td>';
            echo '<td>'.$row['gender'].'</td>';
            echo '<td>'.$row['address'].'</td>';
            echo '<td>'.$row['strand'].'</td>';
            echo '<td>'.$row['grade'].'</td>';
            echo '<td>'.$row['guardian'].'</td>';
            echo '<td>'.$row['student_no'].'</td>';
            echo '<td>'.$row['guardian_no'].'</td>';
            echo '<td><a class="btn btn-danger btn-sm delete-btn" id="delete-link'.$row['id'].'">Delete</a></td>';
            echo '</tr>';
            echo '<div class="modal fade" id="deleteModal'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true" data-backdrop="true">';
			echo '<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="logoutModalLabel">Logout Confirmation</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							Are you sure you want to <b>DELETE</b>'.$row['id'].'?
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary cancel" data-dismiss="modal" style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;border-color:black !important;">Cancel</button>
							<a href="../backend/deleteStudent.php?id='.$row['id'].'" class="btn btn-secondary logout" style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;border-color:black !important;">Delete</a>
						</div>
						</div>
					</div>
					</div>
						</div>
					</div>
				</div>
			</div>
		</div>';
        echo "<script>
document.getElementById('delete-link".$row['id']."').addEventListener('click', function(event) {
  event.preventDefault(); // Prevent default link behavior
  $('#deleteModal".$row['id']."').modal('show'); // Show the modal
});
</script>";
        }

        
    } else {
        echo "<tr><td colspan='6'>No data available</td></tr>";
    }
}

?>
