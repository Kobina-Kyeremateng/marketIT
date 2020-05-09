<?php include('pageloader.php'); ?>
<?php
$id = $_GET['id'];
$con = mysqli_connect('localhost', 'root', '', 'marketit');
//$query = "select * from student where studentID=$id";
$query =  "SELECT s.image, concat (year (s.regDate), cl.className,'M00', s.studentID) AS admissionNumber,s.studentID, s.regDate,s.firstName,s.lastName, s.otherName, s.gender,c.courseName as course ,cl.className as class , s.PhoneNumber,  n.nationalityName as nationality, s.DOB as DOB from student s left join course c on s.course=c.courseID left join class cl on s.class=cl.classID left join nationality n on s.nationality=n.nationalityID left join relation re on s.guardianRelationship=re.relationName where studentID = $id";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$image = $row['image'];
$firstName = $row['firstName'];
$lastName = $row['lastName'];
$otherName = $row['otherName'];
$course = $row['course'];
$class = $row['class'];
$nationality = $row['nationality'];
$gender = $row['gender'];

$PhoneNumber = $row['PhoneNumber'];
$DOB = $row['DOB'];
?>

<div class="page-content">
    <!-- Wrapper -->
    <div class="wrapper wrapper-content">
        <div class="container-fluid">
            <div class="col-12 bg-boxshadow mb-30">
                <div class="wrapper-profile">
                    <div class="profile-card js-profile-card">
                        <div class="profile-card__img"><img src="<?php echo $image; ?>" alt="profile card"></div>
                        <div class="profile-card__cnt js-profile-cnt">
                            <div class="profile-card__name"><?php echo $firstName; ?> <?php echo $lastName; ?> <?php echo $otherName; ?></div>
                            <div class="profile-card__txt"><?php echo $course; ?></div>
                            <div class="profile-card-loc">
                                <div class="profile-card-loc__txt"><?php echo $class; ?></div>
                            </div>
                            <div class="profile-card-inf">
                                <div class="profile-card-inf__item">
                                    <div class="profile-card-inf__title"><?php echo $DOB; ?></div>
                                    <div class="profile-card-inf__txt">Date of Birth</div>
                                </div>

                                <div class="profile-card-inf__item">
                                    <div class="profile-card-inf__title"><?php echo $gender; ?></div>
                                    <div class="profile-card-inf__txt">Gender</div>
                                </div>

                                <!-- <div class="profile-card-inf__item">
                                    <div class="profile-card-inf__title"><?php echo $Deformity; ?></div>
                                    <div class="profile-card-inf__txt">Deformity</div>
                                </div> -->
                                <div class="profile-card-inf__item">
                                    <div class="profile-card-inf__title"><?php echo $PhoneNumber; ?></div>
                                    <div class="profile-card-inf__txt">PhoneNumber</div>
                                </div>
                            </div>
                            <div class="profile-card-ctr">
                                <button class="profile-card__button button--blue js-message-btn">Message</button>
                                <!-- <button class="profile-card__button button--orange">Edit</button> -->
                                <?php echo "<a href='?page=editstudent&&id=$id'>Edit</a>"; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <?php echo "<a href='?page=viewstudent'>Back to List</a>"; ?>


                            </div>
                            <div class="profile-card-message js-message">
                                <form class="profile-card-form">
                                    <div class="profile-card-form__container">
                                        <textarea placeholder="Say something..."></textarea>
                                    </div>
                                    <div class="profile-card-form__bottom">
                                        <button class="profile-card__button button--blue js-message-close">Send</button>
                                        <button class="profile-card__button button--gray js-message-close">Cancel</button>
                                    </div>
                                </form>
                                <div class="profile-card__overlay js-message-close"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Page Content Area End ====== -->
</div>
<!-- ==================================
        ******* Page Wrapper Area End *******
        =================================== -->

<!-- ====== Footer Area Start ====== -->

<!-- ====== Footer Area End ====== -->
</div>
<!-- ======================================
    ********* Main Wrapper Area End ***********
    ======================================= -->
<!-- ======== Must needed plugins to the run this template ======= -->

<script>
    var messageBox = document.querySelector('.js-message');
    var btn = document.querySelector('.js-message-btn');
    var card = document.querySelector('.js-profile-card');
    var closeBtn = document.querySelectorAll('.js-message-close');

    btn.addEventListener('click', function(e) {
        e.preventDefault();
        card.classList.add('active');
    });

    closeBtn.forEach(function(element, index) {
        console.log(element);
        element.addEventListener('click', function(e) {
            e.preventDefault();
            card.classList.remove('active');
        });
    });
</script>

</body>

</html>