<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //sending mail without reloading the page
    $(document).ready(function () {
            $(document).on('click', '.send-mail', function (e) {
                    e.preventDefault();
                    let name = $('#name').val();
                    let email = $('#email').val();
                    let subject = $('#subject').val();
                    let message = $('#message').val();
                    $('.res-btn').hide();
                    $('.send-mail').prepend(
                        ` <div class="col-md-12"> <div class="spinner-border text-light text-center"role="status"> <span class="visually-hidden">Loading...</span> </div> </div> `
                        );                    
                    //For removing the previous success message
                    $('.success-mail').empty();
                    setTimeout(function () {
                        $('.success-mail').empty(); // Remove the success message after 5 seconds
                    }, 10000);
                    //For removing the previous success message
                    $('.errors-mail').empty();
                    setTimeout(function () {
                        $('.errors-mail').empty(); // Remove the success message after 5 seconds
                    }, 10000);
                    $.ajax({
                            url: '{{route("send.mail")}}',
                            method: 'post',
                            data: {
                                name: name,
                                email: email,
                                subject: subject,
                                message: message,
                            },
                            success: function (res) {
                                    $('.success-mail').append(
                                        '<div style="background: green; color: white" class="alert">' +
                                        res.msg + '</div>');
                                    $('.send-mail').find('.spinner-border').remove();
                                    $('.send-mail').removeAttr('disabled');
                                    $('.res-btn').show();

                                },
                            error: function (err) {
                                let error = err.responseJSON;
                                $.each(error.errors, function (index, value) {
                                        $('.errors-mail').append(
                                            '<div style="background: red;" class="alert text-white">' +
                                            value + '</div>');
                                        $('.send-mail').find('.spinner-border').remove();
                                        $('.send-mail').removeAttr('disabled');
                                        $('.res-btn').show();

                                    }

                                );
                            }
                        }
                    )
                }
            )
        }
    )
//live search
$(function () {
            $('#search-input').on('keyup', function () {
                var searchQuery = $(this).val();
                var $resultsContainer = $('#search-results');

                if (searchQuery.length > 1) {
                    $.ajax({
                        type: "GET",
                        url: "{{ route('live.search') }}",
                        data: {
                            query: searchQuery
                        },
                        success: function (data) {
                            $resultsContainer.empty().show();

                            if (data.length === 0) {
                                $resultsContainer.append(
                                    '<li class="dropdown-item">No results found</li>');
                            } else {
                                $.each(data, function (index, item) {
                                    var url = ''; // Define URLs dynamically
                                    if(item.type === 'Blog') {
                                        url =
                                            "{{ route('blog.details', ['slug' => ':slug']) }}"
                                            .replace(':slug', item.slug);
                                    } else if (item.type === 'Service') {
                                        url =
                                            "{{ route('service.details', ['slug' => ':slug']) }}"
                                            .replace(':slug', item.slug);
                                    } else if (item.type === 'Team') {
                                        url =
                                            "{{ route('team.details', ['slug' => ':slug']) }}"
                                            .replace(':slug', item.slug);
                                    }else if (item.type === 'Project') {
                                        url =
                                            "{{ route('project.details', ['slug' => ':slug']) }}"
                                            .replace(':slug', item.slug);
                                    }
                                    var escapedTitle = $('<div>').text(item.title)
                                        .html();
                                    $resultsContainer.append(
                                        `<li class="dropdown-item">
                                    <a href="${url}" class="text-decoration-none">
                                      ${escapedTitle}
                                    </a>
                                </li>`
                                    );
                                });
                            }
                        },
                        error: function () {
                            $resultsContainer.empty().append(
                                '<li class="dropdown-item text-danger">Error retrieving data</li>'
                                ).show();
                        }
                    });
                } else {
                    $resultsContainer.empty().hide();
                }
            });

            $(document).on('click', function (e) {
                if (!$(e.target).closest('.form-search').length) {
                    $('#search-results').empty().hide();
                }
            });
        });
</script>