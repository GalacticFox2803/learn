<?php header("Content-Type: text/html; charset=CP1251");
//������� 1 - ����������� ���������� + �����
//�������� ������, ��������� ����� ���� ����� $a. ��������: ���� ����� 123, ����� ���� 1 + 2 + 3 = 6
//��������� ������������ ������: ��� ������ �����, ��� ����� � �.�.

echo '������� �������� �����: <form action="" method=post>';
echo '<input type=text name="ab" value=""><br><input type=submit></form>';
$a = '';

if(isset($_POST['ab']))
{
$a=$_POST['ab'];
}
else exit();

$pos1 = stripos($a, '.');
$pos2 = stripos($a, ',');
if ($pos1 || $pos2) {
        echo "'{$a}' - �� ����� �����";
    } else if(is_numeric($a)){
//�������� ����������
$sum=0;
//�������� ����� � �������
$b = str_split($a);
//���� ����� 
$sum=array_sum($b);

//������ ���������
echo "�������� �����: " . $a . "<br>";
echo "����� ���� ��������� �����: " . $sum;
}
else if ($a=='') { echo "������ ������"; exit;} 
else {echo "'{$a}' - �� �����";}

//���-���� ������ ���� ���!