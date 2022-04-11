<div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/dashboard">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/incomeCategory/create">
                <i class="bi bi-wallet2"></i>
                <span class="iconify" data-icon="icon-park:wallet-one"></span>
                Add Income Category
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/incomeCategory">
                <span class="iconify" data-icon="clarity:list-solid"></span>
                Income Category List
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/income/create">
                <span class="iconify" data-icon="emojione-v1:money-bag"></span>
                Income
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/income">
                <span class="iconify" data-icon="fluent:people-list-20-filled"></span>
                Income List
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/expenseCategory/create">
                <span class="iconify" data-icon="el:shopping-cart-sign"></span>
                Expense Category
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/expenseCategory">
                  <span class="iconify" data-icon="flat-color-icons:list"></span>
                  Expense Category List
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/expense/create">
                    <span class="iconify" data-icon="fluent:people-money-20-filled"></span>
                  Expense
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/expense">
                    <span class="iconify" data-icon="fa6-solid:clipboard-list"></span>
                  Expense List
                </a>
              </li>
              <hr>
              <ul>
                <li class="">
                    <a class="nav-link dropdown-toggle" href="Wallet/trash" id="navbarDropdown" data-toggle="dropdown" >
                        <span class="iconify" data-icon="flat-color-icons:full-trash"></span>
                        Trash
                    </a>
                    <div class="dropdown-menu" >
                      <a class="dropdown-item" href="/income/category/trash">Income Category</a>
                      <a class="dropdown-item" href="/income/trash">Income </a>
                      <a class="dropdown-item" href="/expense/category/trash">Expense Category </a>
                      <a class="dropdown-item" href="/expense/trash">Expense </a>
                  </li>
              </ul>
              <ul>
                <li class="">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" >
                        <span class="iconify" data-icon="iconoir:stats-report"></span>
                        Report
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="/report/income">Income </a>
                      <a class="dropdown-item" href="/report/expense">Expense</a>
                      <a class="dropdown-item" href="/total/report">Total</a>

                  </li>
              </ul>
              <hr>
              <li class="nav-item">
                <a class="nav-link" href="/email">
                    <span class="iconify" data-icon="clarity:email-solid-badged"></span>
                  Email
                </a>
              </li>
          </ul>
        </div>
      </nav>
