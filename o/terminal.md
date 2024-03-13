 # การดำเนินการไฟล์พื้นฐาน

ls (list): แสดงรายการไฟล์และไดเรกทอรี
- -l : รูปแบบยาว, แสดงสิทธิ์การเข้าถึง, การเป็นเจ้าของ, ขนาด, และวันที่แก้ไข
- -a : รวมไฟล์ที่ซ่อนอยู่

> ls -la

cd <directory> (change directory): เปลี่ยนไดเรกทอรีปัจจุบัน
..: ย้ายขึ้นหนึ่งไดเรกทอรี

>  cd ../

mkdir <directory> (make directory): สร้างไดเรกทอรีใหม่
- -p: สร้างไดเรกทอรีหลักตามที่จำเป็น

>  mkdir -p new_folder/sub_folder

rmdir <directory> (remove directory): ลบไดเรกทอรีที่ว่างเปล่า
>  rmdir old_folder

rm <file> (remove): ลบไฟล์หรือไดเรกทอรี
- -r : แบบเรียกซ้ำ, สำหรับการลบไดเรกทอรีและเนื้อหาของมัน
- -f : บังคับ, ไม่สนใจไฟล์หรืออาร์กิวเมนต์ที่ไม่มีอยู่จริง, ไม่มีการยืนยัน

>  rm -rf old_folder

cp <source> <destination> (copy): คัดลอกไฟล์หรือไดเรกทอรี
- -r : แบบเรียกซ้ำ, สำหรับการคัดลอกไดเรกทอรี

>   cp -r folder1 folder2

mv <source> <destination> (move): ย้ายหรือเปลี่ยนชื่อไฟล์หรือไดเรกทอรี

>   mv old_name.txt new_name.txt

# การควบคุมเวอร์ชันด้วย Git

git init: เริ่มต้นใช้งาน Git repository ใหม่
git clone <repository>: โคลน repository ไปยังไดเรกทอรีใหม่
git add <file>: เพิ่มเนื้อหาไฟล์เข้าไปในดัชนี
.: เพิ่มการเปลี่ยนแปลงทั้งหมด

>   git add .

git commit -m "<message>": บันทึกการเปลี่ยนแปลงไปยัง repository

>   git commit -m "Initial commit"

git push <remote> <branch>: อัปเดต remote refs พร้อมกับวัตถุที่เกี่ยวข้อง

>   git push origin master

git pull <remote>: ดึงข้อมูลจากและรวมกับ repository อื่นหรือ branch ท้องถิ่น

>   git pull origin master