<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Issuance Form</title>
    <link rel="stylesheet" href="new-issuance.css">
    <link rel="stylesheet" href="erroranime.css">
    <link rel="stylesheet" href="backreport.css">
    <script src="validation.js" defer></script>
    
    <style>
        .success-message {
            color: green;
            margin-left: 7vh;
            font-size: large;
        }
        .error-message {
            color: red;
            margin-left: 7vh;
            font-size: large;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <header>
            <img src="images\kengenlogo.jpg" alt="KenGen Logo" class="logo">
            <h1>ICT Equipment Assignment Form (EAF)</h1>
            <div class="form-details">
                <p><strong>Department:</strong> ICT</p>
                <p><strong>Doc. No:</strong> CRP/FCD/ICT/ICT/FM/07</p>
                <p><strong>Issue No:</strong> 4</p>
                <p><strong>Effective Date:</strong> 7th July 2022</p><br>
            </div>
        </header> 
        <div class="back-to-homepage">
           <a href="homepage.html">
            <img src="images\homepage-green-icon.png" alt="Back to Homepage" class="home-icon">
          </a>
        </div>
        <form action="process.php" method="post">
            <section>
                <div class="form-group">
                    <Label for="prep"><strong>Prepared by:</strong></Label>
                    <input type="text" id="prep" name="prep" required>
                </div>

                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="staff-number">Staff Number:</label>
                    <input type="text" id="staff-number" name="staff-number" required>
                </div>
                <div class="form-group">
                    <label for="dept">Dept:</label>
                    <input type="text" id="dept" name="dept" required>
                </div>
                <div class="form-group">
                    <label for="floor-office">Floor/Office No:</label>
                    <input type="text" id="floor-office" name="floor-office" required>
                </div>
                <div id="error-message" class="error-message" style=" display: none;"></div>
                <div class="form-group">
                    <input type="checkbox" id="new-assignment" name="assignment-type[]" value="new" class="assignment-checkbox" >
                    <label for="new-assignment">New Assignment</label>
                    <input type="checkbox" id="recovered" name="assignment-type[]" value="recovered" class="assignment-checkbox">
                    <label for="recovered">Recovered</label>
                    <input type="checkbox" id="replacement" name="assignment-type[]" value="replacement" class="assignment-checkbox">
                    <label for="replacement">Replacement</label>
                </div>
            </section>

            <section>
                <h2>Details of Assigned Equipment</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Details</th>
                            <th>Make</th>
                            <th>Model</th>
                            <th>Serial Number</th>
                            <th>Tag No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Laptop</td>
                            <td><input type="text" id="laptop-make" name="laptop-make" required></td>
                            <td><input type="text" id="laptop-model" name="laptop-model" required></td>
                            <td><input type="text" id="laptop-serial" name="laptop-serial" required></td>
                            <td><input type="text" id="laptop-tag" name="laptop-tag" required></td>
                        </tr>
                        <tr>
                            <td>PC System Unit</td>
                            <td><input type="text" id="pc-make" name="pc-make" required></td>
                            <td><input type="text" id="pc-model" name="pc-model" required></td>
                            <td><input type="text" id="pc-serial" name="pc-serial" required></td>
                            <td><input type="text" id="pc-tag" name="pc-tag" required></td>
                        </tr>
                        <tr>
                            <td>Monitor</td>
                            <td><input type="text" id="monitor-make" name="monitor-make" required></td>
                            <td><input type="text" id="monitor-model" name="monitor-model" required></td>
                            <td><input type="text" id="monitor-serial" name="monitor-serial" required></td>
                            <td><input type="text" id="monitor-tag" name="monitor-tag" required></td>
                        </tr>
                        <tr>
                            <td>UPS</td>
                            <td><input type="text" id="ups-make" name="ups-make" required></td>
                            <td><input type="text" id="ups-model" name="ups-model" required></td>
                            <td><input type="text" id="ups-serial" name="ups-serial" required></td>
                            <td><input type="text" id="ups-tag" name="ups-tag" required></td>
                        </tr>
                        <tr>
                            <td>Mouse</td>
                            <td><input type="text" id="mouse-make" name="mouse-make" required></td>
                            <td><input type="text" id="mouse-model" name="mouse-model" required></td>
                            <td><input type="text" id="mouse-serial" name="mouse-serial" required></td>
                            <td><input type="text" id="mouse-tag" name="mouse-tag" required></td>
                        </tr>
                        <tr>
                            <td>Cable Lock</td>
                            <td><input type="text" id="cable-make" name="cable-make" required></td>
                            <td><input type="text" id="cable-model" name="cable-model" required></td>
                            <td><input type="text" id="cable-serial" name="cable-serial" required></td>
                            <td><input type="text" id="cable-tag" name="cable-tag" required></td>
                        </tr>
                        <tr>
                            <td>Laptop Bag</td>
                            <td><input type="text" id="bag-make" name="bag-make" required></td>
                            <td><input type="text" id="bag-model" name="bag-model" required></td>
                            <td><input type="text" id="bag-serial" name="bag-serial" required></td>
                            <td><input type="text" id="bag-tag" name="bag-tag" required></td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section>
                <h2>Details of Replaced Equipment</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Make</th>
                            <th>Model</th>
                            <th>Serial Number</th>
                            <th>Tag No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Working</td>
                            <td><input type="text" id="replace-laptop-make" name="replace-laptop-make"></td>
                            <td><input type="text" id="replace-laptop-model" name="replace-laptop-model"></td>
                            <td><input type="text" id="replace-laptop-serial" name="replace-laptop-serial"></td>
                            <td><input type="text" id="replace-laptop-tag" name="replace-laptop-tag"></td>
                        </tr>
                        <tr>
                            <td>Faulty</td>
                            <td><input type="text" id="replace-pc-make" name="replace-pc-make"></td>
                            <td><input type="text" id="replace-pc-model" name="replace-pc-model"></td>
                            <td><input type="text" id="replace-pc-serial" name="replace-pc-serial"></td>
                            <td><input type="text" id="replace-pc-tag" name="replace-pc-tag"></td>
                        </tr>
                        <tr>
                            <td>Working</td>
                            <td><input type="text" id="replace-monitor-make" name="replace-monitor-make"></td>
                            <td><input type="text" id="replace-monitor-model" name="replace-monitor-model"></td>
                            <td><input type="text" id="replace-monitor-serial" name="replace-monitor-serial"></td>
                            <td><input type="text" id="replace-monitor-tag" name="replace-monitor-tag"></td>
                        </tr>
                        <tr>
                            <td>Faulty</td>
                            <td><input type="text" id="replace-ups-make" name="replace-ups-make"></td>
                            <td><input type="text" id="replace-ups-model" name="replace-ups-model"></td>
                            <td><input type="text" id="replace-ups-serial" name="replace-ups-serial"></td>
                            <td><input type="text" id="replace-ups-tag" name="replace-ups-tag"></td>
                        </tr>
                        <tr>
                            <td>Working</td>
                            <td><input type="text" id="replace-mouse-make" name="replace-mouse-make"></td>
                            <td><input type="text" id="replace-mouse-model" name="replace-mouse-model"></td>
                            <td><input type="text" id="replace-mouse-serial" name="replace-mouse-serial"></td>
                            <td><input type="text" id="replace-mouse-tag" name="replace-mouse-tag"></td>
                        </tr>
                        <tr>
                            <td>Faulty</td>
                            <td><input type="text" id="replace-cable-make" name="replace-cable-make"></td>
                            <td><input type="text" id="replace-cable-model" name="replace-cable-model"></td>
                            <td><input type="text" id="replace-cable-serial" name="replace-cable-serial"></td>
                            <td><input type="text" id="replace-cable-tag" name="replace-cable-tag"></td>
                        </tr>
                        <tr>
                            <td>Working</td>
                            <td><input type="text" id="replace-bag-make" name="replace-bag-make"></td>
                            <td><input type="text" id="replace-bag-model" name="replace-bag-model"></td>
                            <td><input type="text" id="replace-bag-serial" name="replace-bag-serial"></td>
                            <td><input type="text" id="replace-bag-tag" name="replace-bag-tag"></td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <div class="notes">
                <p><strong>Notes:</strong></p>
                <p>1. All the required information must be filled in the spaces provided "N/A" for unavailable information.</p>
            </div>
            
            <input type="submit" value="submit" id="submit">
            <br>
            <div id="message-container">

            </div>
            <script src="script.js"></script>
            <br> <br><br><br>
        </form>
    </div>
</body>
</html>
