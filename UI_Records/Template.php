<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
    <link rel="stylesheet" href="Template.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="sidebar-header">
                <h2>MENU</h2>
            </div>
            <nav class="sidebar-nav">
                <a href="Template.php" class="nav-item active">
                    <i class="fas fa-database"></i>
                    <span>Records</span>
                </a>
                <a href="Download.php" class="nav-item">
                  <i class="fas fa-upload"></i>
                    <span>Upload</span>
                </a>
            </nav>
        </div>

        <div class="main-content">
            <div class="header">
                <h1>RECORDS <i class="fas fa-database"></i></h1>
            </div>

            <form method="POST" action="#">
                <div class="form-group">
                    <label for="course">COURSE/PROGRAM</label>
                    <select name="course" id="course">
                        <option value="">All Programs</option>
                        <option value="bscs">BS Computer Science</option>
                        <option value="bsit">BS Information Technology</option>
                        <option value="bsba">BS Business Administration</option>
                        <option value="bsee">BS Electrical Engineering</option>
                        <option value="bsce">BS Civil Engineering</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="schoolYear">SCHOOL YEAR</label>
                    <select name="schoolYear" id="schoolYear">
                        <option value="">Select School Year</option>
                        <option value="2024-2025">2024-2025</option>
                        <option value="2023-2024">2023-2024</option>
                        <option value="2022-2023">2022-2023</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="campus">CAMPUS</label>
                    <select name="campus" id="campus">
                        <option value="">Select Campus</option>
                        <option value="main">Main Campus</option>
                        <option value="north">North Campus</option>
                        <option value="south">Camarin Campus</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="semester">SEMESTER</label>
                    <select name="semester" id="semester">
                        <option value="">Select Semester</option>
                        <option value="1st">1st Semester</option>
                        <option value="2nd">2nd Semester</option>
                        <option value="summer">Summer</option>
                    </select>
                </div>

                <div class="form-row">
                    <div class="form-group half">
                        <label for="section">SECTION</label>
                        <select name="section" id="section">
                            <option value="">Select Section</option>
                            <option value="a">A - SOUTH</option>
                            <option value="b">B - SOUTH</option>
                            <option value="c">A - NORTH</option>
                            <option value="d">B - NORTH</option>
                        </select>
                    </div>

                    <div class="form-group half">
                        <label for="deptype">DEPARTMENT TYPE</label>
                        <select name="deptype" id="deptype">
                            <option value="">Select Department Type</option>
                            <option value="enrolled">College</option>
                            <option value="completed">Graduate School</option>
                            <option value="dropped">College of Law</option>
                        </select>
                    </div>
                </div>

                <div class="download-link">
                    <a href="#">Download all records <i class="fas fa-download"></i></a>
                </div>

                <div class="button-group">
                    <button type="button" class="btn btn-print" onclick="window.print()">PRINT</button>
                    <button type="submit" class="btn btn-view">VIEW</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
