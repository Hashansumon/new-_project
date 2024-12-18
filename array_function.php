<?php



$students = [
   '12'=>'Rakib',
   '13'=>'Rahim',
   '23'=>'Sharif'
];
echo"<br>";
echo count($students);

echo"<br>";

foreach($students as $key=> $student){
   echo "$key:$student.<br>";
}


$studentsName = [
        'Rahaman','Rabbi','Rafique','Rashel','Rashed','Ryahin'
];

echo count($studentsName);

echo"<br>";

foreach($studentsName as $key=>$studentNmae){
   echo"$key : $studentNmae .<br>";

   
}
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin git@github.com:Hashansumon/new-_project.git
git push -u origin main