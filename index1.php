<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tanabata Leaderboard</title>
  <link rel="stylesheet" href="styles.css">
  
</head>
<body>

  <header>
    <h1>Tanabata Leaderboard</h1>
  </header>

  <nav>
    <a href="#" onclick="showTab('allTime')">All Time</a>
    <a href="#" onclick="showTab('weekly')">Weekly</a>
    <a href="#" onclick="showTab('daily')">Daily</a>
    <a href="#" onclick="showTab('friends')">Friends</a>
  </nav>

  <section>
    <table id="leaderboardTable">
      <thead>
        <tr>
          <th>Rank</th>
          <th>Name</th>
          <th>Score</th>
        </tr>
      </thead>
      <tbody id="tableBody">
        <!-- Leaderboard data will be dynamically added here -->
      </tbody>
    </table>
  </section>

  <script src="myscript.js">
   
  </script>

</body>
</html>