<style>
    .card {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 300px;
  height: 200px;
  border: 1px solid #ccc;
  border-radius: 10px;
  padding: 20px;
  margin-bottom: 20px;
}

.card .skill-name {
  font-size: 24px;
  font-weight: bold;
}

.card .skill-level {
  font-size: 18px;
  margin-bottom: 10px;
}

.card .status {
  font-size: 18px;
  font-weight: bold;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 5px 10px;
}

.card .status.ok {
  color: green;
  border-color: green;
}

.card .status.ng {
  color: red;
  border-color: red;
}

    </style>
    <div class="card">
  <div class="skill-name">PHP</div>
  <div class="skill-level">7</div>
  <form action="update-status.php" method="post">
    <input type="hidden" name="skill-id" value="1">
    <select name="status">
      <option value="ok">OK</option>
      <option value="ng">NG</option>
    </select>
    <button type="submit">Update</button>
  </form>
</div>
<div class="card">
  <div class="skill-name">PHP</div>
  <div class="skill-level">7</div>
  <span class="status ok">OK</span>
</div>
<div class="card">
  <div class="skill-name">JavaScript</div>
  <div class="skill-level">5</div>
  <span class="status ng">NG</span>
</div>