use function Pest\Laravel\get;

it('has mynewfeature page', function () {
    $response = get('/mynewfeature');

    $response->assertStatus(200);
});
