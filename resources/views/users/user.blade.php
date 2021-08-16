<h1>Bạn là người dùng</h1>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
<input type="submit" class="btn btn-default btn-flat" name="" value="Đăng xuất">
</form>