<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" href="Download.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="sidebar-header">
                <h2>MENU</h2>
            </div>
            <nav class="sidebar-nav">
                <a href="Template.php" class="nav-item">
                    <i class="fas fa-database"></i>
                    <span>Records</span>
                </a>
                <a href="Download.php" class="nav-item active">
                  <i class="fas fa-upload"></i>
                    <span>Upload</span>
                </a>
            </nav>
    </div>

        <div class="main-content">
            <div class="header">
                <h1>UPLOAD <i class="fas fa-upload"></i></h1>
            </div>

            <form method="POST" action="#">

                <div class="form-row">
                    <div class="form-group half">
                        <label for="section">SCHOOL YEAR</label>
                        <select name="schoolYear" id="schoolYear">
                            <option value="">Select School Year</option>
                            <option value="2024-2025">2024-2025</option>
                            <option value="2023-2024">2023-2024</option>
                            <option value="2022-2023">2022-2023</option>
                        </select>
                    </div>

                    <div class="form-group half">
                      <label for="semester">SEMESTER</label>
                      <select name="semester" id="semester">
                          <option value="">Select Semester</option>
                          <option value="1st">1st Semester</option>
                          <option value="2nd">2nd Semester</option>
                          <option value="summer">Summer</option>
                      </select>
                    </div>
                </div>

                <form action="/upload" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="fileInput">Choose a file</label>
                  <input id="fileInput" name="file" type="file" aria-describedby="fileHelp" required>
                  <small id="fileHelp">Max file size: 5MB. Allowed: .jpg, .png, .pdf</small>
                </div>

                <button type="submit">Upload</button>
              </form>

            </form>
        </div>
    </div>
</body>
</html>
