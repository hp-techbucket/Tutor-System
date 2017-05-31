		<div class="blog">
			<div class="destination-head">
				<div class="wrap">
					<h3>รายละเอียด</h3>
				</div>
			</div>
								<div class="wrapper">
  <div class="folderTab">
    <h3>ข้อมูลส่วนตัว</h3>
  </div>
  <div class="borderBox">
    <div class="tabler">
      <a href="about-studentt.php" class="edit grayLG fright">แก้ไข</a>
    <table>
      <tbody>
	  	  			<?php 
$collusers = $db->users;
$cursor = $collusers->find(array('username' => $_SESSION['username']));
foreach ($cursor as $doc) {
$users = array('firstname'=> $doc['firstname'],'lastname'=> $doc['lastname'],'gender'=> $doc['gender'],'email'=> $doc['email'],'mobile'=> $doc['mobile'],'stdid'=> $doc['stdid'],'facebook_contact'=> $doc['facebook_contact'],'study_plan'=> $doc['study_plan']) ;
?>
          <tr>
        <td>
         ชื่อ
        </td>
        <td>
          <?php echo $users['firstname'].' '.$users['lastname']; ?>
        </td>
      </tr>
      <tr>
        <td>
        เพศ
        </td>
        <td>
          <?php echo $users['gender']; ?>
        </td>
      </tr>
      <tr>
        <td>
         อีเมลล์
        </td>
        <td>
         <?php echo $users['email']; ?>
        </td>
      </tr>
	      <tr>
        <td>
        เบอร์โทรศัพท์มือถือ
        </td>
        <td>
          <?php echo $users['mobile']; ?>
        </td>
      </tr>
	      <tr>
        <td>
    บัญชีไลน์
        </td>
        <td>
          <?php echo $users['stdid']; ?>
        </td>
      </tr>
	      <tr>
        <td>
      บัญชีเฟสบุ๊ค
        </td>
        <td>
           <?php echo $users['facebook_contact']; ?>
        </td>
      </tr>
	  	      <tr>
        <td>
แผนการเรียน
        </td>
        <td>
           <?php echo $users['study_plan']; ?>
        </td>
      </tr>
	  	  			<?php 
}
?>
      </tbody>
    </table>
    </div> 
  </div>
</div>	

<?php 
$collcourse = $db->course;
$cursor1 = $collcourse->find(array('student_author' => $_SESSION['username']));
$sum1=$collcourse->count(array('student_author' => $_SESSION['username']));
if((int)$sum1==0){ ?>
<div class="wrapper">
  <div class="folderTab">
    <h3>วิชาที่ประกาศ</h3>
  </div>
  <div class="borderBox">
    <div class="tabler">
      <a href="announcement.php" class="edit grayLG fright">ประกาศ</a>
    <table>
      <tbody>

     <h3> ไม่พบวิชาที่ประกาศไว้</h3>  

      </tbody>
    </table>
    </div> 
  </div>
</div>	

<?php }else{ ?>
<div class="wrapper">
	  <div class="folderTab">
    <h3>วิชาที่ประกาศ</h3>
  </div>		
		<table class="table-fill">
<thead>
<tr>
<th class="text-center">รหัสวิชา</th>
<th class="text-center">ชื่อวิชา</th>
<th class="text-center">ระดับชั้น</th>
<th class="text-center">แก้ไขข้อมูล</th>
<th class="text-center">ดูการจอง</th>
</tr>
</thead>	
</div>	
<?php

foreach ($cursor1 as $doc) {
$rname = array('id'=> $doc['id'],'subject'=> $doc['subject'],'level'=> $doc['level']) ;
?>
<tbody class="table-hover">
<tr>
<div id="outer">
<td class="text-center"><?php echo $rname['id']; ?></td>
<td class="text-center"><?php echo $rname['subject']; ?></td>
<td class="text-center"><?php echo $rname['level']; ?></td>
<td class="text-center"><a href="detail.php?id=<?php echo $rname['id']; ?>" class="button1">แก้ไข</a></td>
<td class="text-center"><a href="reserver.php?id=<?php echo $rname['id']; ?>" class="button1">ดูการจอง</a></td>
</div>
</tr>

</tbody>
			<br>
						<?php 
}
}
?>
</table>
</div>