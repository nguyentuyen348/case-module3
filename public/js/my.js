$(document).ready(function () {
    let origin = location.origin;
    $(".user-item").hover(function () {
        $(this).css('background-color', "red")
    }, function () {
        $(this).css('background-color', "white")
    })

    $('.delete-user').click(function () {
        if (confirm('Are you sure')) {
            let idUser = $(this).attr('data-id');
            $.ajax({
                url: 'http://127.0.0.1:8000/admin/users/' + idUser + '/delete',
                method: 'GET',
                dataType: 'json',
                success: function (res) {
                    $('#user-' + idUser).remove();
                },
                error: function (error) {

                }

            })
        }
    });


    $('#search-user').keyup(function () {
        let value = $(this).val();
        if (value) {
            $.ajax({
                url: 'http://127.0.0.1:8000/admin/users/search',
                method: 'GET',
                data: {
                    keyword: value
                },
                dataType: 'json',
                success: function (res) {
                    let html = '';
                    res.forEach(function (item, index) {
                        html += '<button class="list-group-item list-group-item-action">';
                        html += item.name;
                        html += '</button>'
                    })
                    $('#list-user-search').html(html);
                },
                error: function (error) {

                }

            })
        } else  {
            $('#list-user-search').html('');

        }

    });

    $('#search-student-borrow').keyup(function () {
        let value = $(this).val();
        if (value) {
            $.ajax({
                url: origin + '/admin/borrows/search-student',
                method: 'GET',
                data: {
                    keyword: value
                },
                success: function (res) {
                    let html = '';
                    res.forEach(function (item, index) {
                        html += '<button data-id="'+ item.id +'" class="list-group-item list-group-item-action student-item">';
                        html += item.name;
                        html += '</button>'
                    })
                    $('#list-student-borrow-search').html(html);
                    console.log(res)
                },
                error: function (error) {
                    console.log(error)
                }
            })
        }else  {
            $('#list-student-borrow-search').html('');
        }
    })

    $('body').on('click','.student-item',function () {
        let idStudentClicked = $(this).attr('data-id');
        $.ajax({
            url: origin + '/admin/borrows/find-student/' + idStudentClicked,
            method: 'GET',
            success: function (res) {
                $('#name-student-borrow').val(res.name);
                $('#email-student-borrow').val(res.email);
                $('#phone-student-borrow').val(res.phone);
                $('#list-student-borrow-search').html('');
            }
        })
    });

    /*delete-wallet-category*/
    $('.delete-wallet-category').click(function () {
        if (confirm('Are you sure')) {
            let idCategory = $(this).attr('data-id');
            $.ajax({
                url: origin + '/users/wallets/categories/' + idCategory + '/delete',
                method: 'GET',
                dataType: 'json',
                success: function (res) {
                    $('#wallet-category-' + idCategory).remove();
                },
                error: function (error) {

                }

            })
        }
    });

    $('.delete-income-category').click(function () {
        if (confirm('Are you sure')) {
            let idCategory = $(this).attr('data-id');
            $.ajax({
                url: origin + '/users/incomes/categories/' + idCategory + '/delete',
                method: 'GET',
                dataType: 'json',
                success: function (res) {
                    $('#income-category-' + idCategory).remove();
                },
                error: function (error) {

                }

            })
        }
    });
    /*delete-cost-category*/
    $('.delete-cost-category').click(function () {
        if (confirm('Are you sure')) {
            let idCategory = $(this).attr('data-id');
            $.ajax({
                url: origin + '/users/costs/categories/' + idCategory + '/delete',
                method: 'GET',
                dataType: 'json',
                success: function (res) {
                    $('#cost-category-' + idCategory).remove();
                },
                error: function (error) {

                }

            })
        }
    });

    /*delete-cost*/
    $('.delete-cost').click(function () {
        if (confirm('Are you sure')) {
            let idCost = $(this).attr('data-id');
            $.ajax({
                url: origin + '/users/costs/' + idCost + '/delete',
                method: 'GET',
                dataType: 'json',
                success: function (res) {
                    $('#cost-' + idCost).remove();
                },
                error: function (error) {

                }

            })
        }
    });

    /*delete-wallet*/
    $('.delete-wallet').click(function () {
        if (confirm('Are you sure')) {
            let idWallet = $(this).attr('data-id');
            $.ajax({
                url: origin + '/users/wallets/' + idWallet + '/delete',
                method: 'GET',
                dataType: 'json',
                success: function (res) {
                    $('#wallet-' + idWallet).remove();
                },
                error: function (error) {

                }

            })
        }
    });

})
