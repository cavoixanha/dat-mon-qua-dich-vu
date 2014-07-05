<form action="modules/tintuc/xuly.php" method="post" >
  <div class="left-content">
    <table width="100%" border="0" style="padding-left:20px; text-transform:capitalize" >
      <tr>
        <td height="55" colspan="2" align="center" style="text-transform: capitalize; font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold;">Thêm Tin Tức</td>
      </tr>
      <tr>
        <td width="46%">Tên Tin Tức</td>
        <td width="54%"><label for="tentintuc"></label>
          <input type="text" name="tentintuc" id="tentintuc"></td>
      </tr>
      <tr>
        <td>ảnh minh họa</td>
        <td><label for="anhminhhoa"></label>
          <input type="text" name="anhminhhoa" id="anhminhhoa"></td>
      </tr>
      <tr>
        <td>trạng thái </td>
        <td><label for="trangthai"></label>
          <select name="trangthai" id="trangthai">
            <option value="1" selected="selected">Hiển Thị</option>
            <option value="0">Không Hiển Thị</option>
          </select></td>
      </tr>
      <tr>
        <td>thứ tự</td>
        <td><select name="thutu" id="thutu">
            <option value="1">Đầu</option>
            <option value="2">Giữa </option>
            <option value="3">Cuối</option>
          </select></td>
      </tr>
      <tr>
        <td height="44" colspan="2" style="text-align:center"><input name="them" type="submit" id="them" value="Thêm">
          <input type="reset" name="clear" id="clear" value="Reset"></td>
      </tr>
    </table>
  </div>
</form>
