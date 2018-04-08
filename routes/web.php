<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('blog.index');
})->name('blog.index');

Route::get('post/{id}', function ($id) {
    // dumpy data
    if ($id == 1) {
        $post = [
            'title' => 'Learn new stuff',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit libero, tincidunt ac lorem ac, condimentum varius augue. Integer accumsan pulvinar risus et congue. Nulla maximus libero nunc, at feugiat massa rutrum quis. Etiam eu euismod eros. Nullam mauris elit, condimentum sit amet felis sed, ultrices mattis leo. Etiam vel lacus vestibulum urna convallis dapibus at id sem. Nam vitae odio feugiat, porttitor odio convallis, facilisis leo. Fusce interdum congue purus sit amet elementum. Vivamus ipsum mi, varius vitae ante ut, eleifend consequat elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi ut mauris pharetra, auctor nibh ut, efficitur velit.

                Maecenas urna turpis, viverra et rutrum vel, cursus sit amet mi. Donec efficitur, turpis mollis fringilla ullamcorper, elit augue pellentesque urna, auctor viverra massa felis semper nisi. Ut a feugiat libero. Maecenas dapibus tellus malesuada felis dignissim, a molestie purus rutrum. Pellentesque nisl velit, ullamcorper vitae mi vitae, mollis congue lacus. In vel aliquet dolor. Cras lobortis feugiat neque nec congue. Donec turpis mi, vestibulum at nulla et, tristique tempus turpis. Maecenas eget dui vel dolor laoreet fringilla. Integer dapibus nisi vel dui molestie, nec semper enim fermentum. Curabitur ornare euismod justo, sed volutpat libero interdum sed. Aliquam ut nulla vulputate, ultricies magna eu, pharetra sem.

                Etiam pulvinar mauris in pharetra rutrum. Duis urna purus, tincidunt at orci sit amet, mollis aliquet turpis. Maecenas non quam congue, tempor nunc at, varius augue. Maecenas et arcu vitae nisl cursus porttitor et nec purus. Vivamus leo risus, dictum molestie leo eu, venenatis aliquam velit. Aenean ligula augue, tincidunt in dolor elementum, viverra ornare odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus at elit sit amet enim viverra hendrerit.

                Suspendisse euismod nec sem quis pulvinar. Donec sed nisl feugiat, pulvinar libero quis, volutpat nisi. Pellentesque fermentum dignissim sapien eget volutpat. Fusce fermentum diam ut tortor ultricies, vitae tempor velit faucibus. Sed at consectetur tortor. Integer vitae arcu vulputate, lobortis velit id, aliquam purus. Nullam placerat ultricies tempus. Aliquam turpis nisi, interdum pulvinar sapien posuere, ultrices condimentum augue. Aenean sit amet lobortis mi. Vestibulum ipsum risus, auctor volutpat suscipit iaculis, mollis ut lorem. Curabitur non magna quis felis gravida egestas id sed urna.

                Ut finibus magna ut diam commodo porttitor semper vel ipsum. Cras finibus sapien vitae est efficitur hendrerit. Sed fringilla mauris ac justo condimentum cursus. Fusce nec purus tincidunt, finibus enim id, accumsan nulla. Donec malesuada feugiat neque, ut porta dui accumsan id. Aliquam mauris nibh, sollicitudin vitae ex id, vestibulum maximus quam. Fusce nec lacus scelerisque, viverra felis ultricies, aliquet est. Pellentesque metus dui, viverra non malesuada eget, faucibus vitae turpis. Praesent ut velit magna. Nam consequat tincidunt est non tincidunt. Nullam molestie hendrerit vehicula. Nulla mi nisi, ultrices vel accumsan eget, faucibus non ex. Aenean sit amet libero eu felis elementum venenatis.'
        ];
    } else {
        $post = [
            'title' => 'Learn more stuff',
            'content' => 'Condimentum varius augue. Integer accumsan pulvinar risus et congue. Nulla maximus libero nunc, at feugiat massa rutrum quis. Etiam eu euismod eros. Nullam mauris elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit libero, tincidunt ac lorem ac, condimentum varius augue. Integer accumsan pulvinar risus et congue. Nulla maximus libero nunc, at feugiat massa rutrum quis. Etiam eu euismod eros. Nullam mauris elit, condimentum sit amet felis sed, ultrices mattis leo. Etiam vel lacus vestibulum urna convallis dapibus at id sem. Nam vitae odio feugiat, porttitor odio convallis, facilisis leo. Fusce interdum congue purus sit amet elementum. Vivamus ipsum mi, varius vitae ante ut, eleifend consequat elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi ut mauris pharetra, auctor nibh ut, efficitur velit.

                Maecenas urna turpis, viverra et rutrum vel, cursus sit amet mi. Donec efficitur, turpis mollis fringilla ullamcorper, elit augue pellentesque urna, auctor viverra massa felis semper nisi. Ut a feugiat libero. Maecenas dapibus tellus malesuada felis dignissim, a molestie purus rutrum. Pellentesque nisl velit, ullamcorper vitae mi vitae, mollis congue lacus. In vel aliquet dolor. Cras lobortis feugiat neque nec congue. Donec turpis mi, vestibulum at nulla et, tristique tempus turpis. Maecenas eget dui vel dolor laoreet fringilla. Integer dapibus nisi vel dui molestie, nec semper enim fermentum. Curabitur ornare euismod justo, sed volutpat libero interdum sed. Aliquam ut nulla vulputate, ultricies magna eu, pharetra sem.

                Etiam pulvinar mauris in pharetra rutrum. Duis urna purus, tincidunt at orci sit amet, mollis aliquet turpis. Maecenas non quam congue, tempor nunc at, varius augue. Maecenas et arcu vitae nisl cursus porttitor et nec purus. Vivamus leo risus, dictum molestie leo eu, venenatis aliquam velit. Aenean ligula augue, tincidunt in dolor elementum, viverra ornare odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus at elit sit amet enim viverra hendrerit.

                Suspendisse euismod nec sem quis pulvinar. Donec sed nisl feugiat, pulvinar libero quis, volutpat nisi. Pellentesque fermentum dignissim sapien eget volutpat. Fusce fermentum diam ut tortor ultricies, vitae tempor velit faucibus. Sed at consectetur tortor. Integer vitae arcu vulputate, lobortis velit id, aliquam purus. Nullam placerat ultricies tempus. Aliquam turpis nisi, interdum pulvinar sapien posuere, ultrices condimentum augue. Aenean sit amet lobortis mi. Vestibulum ipsum risus, auctor volutpat suscipit iaculis, mollis ut lorem. Curabitur non magna quis felis gravida egestas id sed urna.

                Ut finibus magna ut diam commodo porttitor semper vel ipsum. Cras finibus sapien vitae est efficitur hendrerit. Sed fringilla mauris ac justo condimentum cursus. Fusce nec purus tincidunt, finibus enim id, accumsan nulla. Donec malesuada feugiat neque, ut porta dui accumsan id. Aliquam mauris nibh, sollicitudin vitae ex id, vestibulum maximus quam. Fusce nec lacus scelerisque, viverra felis ultricies, aliquet est. Pellentesque metus dui, viverra non malesuada eget, faucibus vitae turpis. Praesent ut velit magna. Nam consequat tincidunt est non tincidunt. Nullam molestie hendrerit vehicula. Nulla mi nisi, ultrices vel accumsan eget, faucibus non ex. Aenean sit amet libero eu felis elementum venenatis. '
        ];
    }
    return view('blog.post', ['post' => $post]);
})->name('blog.post');

Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::group(['prefix' => 'admin'], function(){

    Route::get('', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::get('create', function () {
        return view('admin.create');
    })->name('admin.create');

    Route::get('edit/{id}', function ($id) {
        if ($id == 1) {
            $post = [
                'title' => 'Edit new stuff',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit libero, tincidunt ac lorem ac, condimentum varius augue. Integer accumsan pulvinar risus et congue. Nulla maximus libero nunc, at feugiat massa rutrum quis. Etiam eu euismod eros. Nullam mauris elit, condimentum sit amet felis sed, ultrices mattis leo. Etiam vel lacus vestibulum urna convallis dapibus at id sem. Nam vitae odio feugiat, porttitor odio convallis, facilisis leo. Fusce interdum congue purus sit amet elementum. Vivamus ipsum mi, varius vitae ante ut, eleifend consequat elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi ut mauris pharetra, auctor nibh ut, efficitur velit.

                Maecenas urna turpis, viverra et rutrum vel, cursus sit amet mi. Donec efficitur, turpis mollis fringilla ullamcorper, elit augue pellentesque urna, auctor viverra massa felis semper nisi. Ut a feugiat libero. Maecenas dapibus tellus malesuada felis dignissim, a molestie purus rutrum. Pellentesque nisl velit, ullamcorper vitae mi vitae, mollis congue lacus. In vel aliquet dolor. Cras lobortis feugiat neque nec congue. Donec turpis mi, vestibulum at nulla et, tristique tempus turpis. Maecenas eget dui vel dolor laoreet fringilla. Integer dapibus nisi vel dui molestie, nec semper enim fermentum. Curabitur ornare euismod justo, sed volutpat libero interdum sed. Aliquam ut nulla vulputate, ultricies magna eu, pharetra sem.

                Etiam pulvinar mauris in pharetra rutrum. Duis urna purus, tincidunt at orci sit amet, mollis aliquet turpis. Maecenas non quam congue, tempor nunc at, varius augue. Maecenas et arcu vitae nisl cursus porttitor et nec purus. Vivamus leo risus, dictum molestie leo eu, venenatis aliquam velit. Aenean ligula augue, tincidunt in dolor elementum, viverra ornare odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus at elit sit amet enim viverra hendrerit.

                Suspendisse euismod nec sem quis pulvinar. Donec sed nisl feugiat, pulvinar libero quis, volutpat nisi. Pellentesque fermentum dignissim sapien eget volutpat. Fusce fermentum diam ut tortor ultricies, vitae tempor velit faucibus. Sed at consectetur tortor. Integer vitae arcu vulputate, lobortis velit id, aliquam purus. Nullam placerat ultricies tempus. Aliquam turpis nisi, interdum pulvinar sapien posuere, ultrices condimentum augue. Aenean sit amet lobortis mi. Vestibulum ipsum risus, auctor volutpat suscipit iaculis, mollis ut lorem. Curabitur non magna quis felis gravida egestas id sed urna.

                Ut finibus magna ut diam commodo porttitor semper vel ipsum. Cras finibus sapien vitae est efficitur hendrerit. Sed fringilla mauris ac justo condimentum cursus. Fusce nec purus tincidunt, finibus enim id, accumsan nulla. Donec malesuada feugiat neque, ut porta dui accumsan id. Aliquam mauris nibh, sollicitudin vitae ex id, vestibulum maximus quam. Fusce nec lacus scelerisque, viverra felis ultricies, aliquet est. Pellentesque metus dui, viverra non malesuada eget, faucibus vitae turpis. Praesent ut velit magna. Nam consequat tincidunt est non tincidunt. Nullam molestie hendrerit vehicula. Nulla mi nisi, ultrices vel accumsan eget, faucibus non ex. Aenean sit amet libero eu felis elementum venenatis.'
            ];
        } else {
            $post = [
                'title' => 'Edit more stuff',
                'content' => 'Condimentum varius augue. Integer accumsan pulvinar risus et congue. Nulla maximus libero nunc, at feugiat massa rutrum quis. Etiam eu euismod eros. Nullam mauris elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit libero, tincidunt ac lorem ac, condimentum varius augue. Integer accumsan pulvinar risus et congue. Nulla maximus libero nunc, at feugiat massa rutrum quis. Etiam eu euismod eros. Nullam mauris elit, condimentum sit amet felis sed, ultrices mattis leo. Etiam vel lacus vestibulum urna convallis dapibus at id sem. Nam vitae odio feugiat, porttitor odio convallis, facilisis leo. Fusce interdum congue purus sit amet elementum. Vivamus ipsum mi, varius vitae ante ut, eleifend consequat elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi ut mauris pharetra, auctor nibh ut, efficitur velit.

                Maecenas urna turpis, viverra et rutrum vel, cursus sit amet mi. Donec efficitur, turpis mollis fringilla ullamcorper, elit augue pellentesque urna, auctor viverra massa felis semper nisi. Ut a feugiat libero. Maecenas dapibus tellus malesuada felis dignissim, a molestie purus rutrum. Pellentesque nisl velit, ullamcorper vitae mi vitae, mollis congue lacus. In vel aliquet dolor. Cras lobortis feugiat neque nec congue. Donec turpis mi, vestibulum at nulla et, tristique tempus turpis. Maecenas eget dui vel dolor laoreet fringilla. Integer dapibus nisi vel dui molestie, nec semper enim fermentum. Curabitur ornare euismod justo, sed volutpat libero interdum sed. Aliquam ut nulla vulputate, ultricies magna eu, pharetra sem.

                Etiam pulvinar mauris in pharetra rutrum. Duis urna purus, tincidunt at orci sit amet, mollis aliquet turpis. Maecenas non quam congue, tempor nunc at, varius augue. Maecenas et arcu vitae nisl cursus porttitor et nec purus. Vivamus leo risus, dictum molestie leo eu, venenatis aliquam velit. Aenean ligula augue, tincidunt in dolor elementum, viverra ornare odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus at elit sit amet enim viverra hendrerit.

                Suspendisse euismod nec sem quis pulvinar. Donec sed nisl feugiat, pulvinar libero quis, volutpat nisi. Pellentesque fermentum dignissim sapien eget volutpat. Fusce fermentum diam ut tortor ultricies, vitae tempor velit faucibus. Sed at consectetur tortor. Integer vitae arcu vulputate, lobortis velit id, aliquam purus. Nullam placerat ultricies tempus. Aliquam turpis nisi, interdum pulvinar sapien posuere, ultrices condimentum augue. Aenean sit amet lobortis mi. Vestibulum ipsum risus, auctor volutpat suscipit iaculis, mollis ut lorem. Curabitur non magna quis felis gravida egestas id sed urna.

                Ut finibus magna ut diam commodo porttitor semper vel ipsum. Cras finibus sapien vitae est efficitur hendrerit. Sed fringilla mauris ac justo condimentum cursus. Fusce nec purus tincidunt, finibus enim id, accumsan nulla. Donec malesuada feugiat neque, ut porta dui accumsan id. Aliquam mauris nibh, sollicitudin vitae ex id, vestibulum maximus quam. Fusce nec lacus scelerisque, viverra felis ultricies, aliquet est. Pellentesque metus dui, viverra non malesuada eget, faucibus vitae turpis. Praesent ut velit magna. Nam consequat tincidunt est non tincidunt. Nullam molestie hendrerit vehicula. Nulla mi nisi, ultrices vel accumsan eget, faucibus non ex. Aenean sit amet libero eu felis elementum venenatis. '
            ];
        }
        return view('admin.edit', ['post' => $post]);
    })->name('admin.edit');

    Route::post('create', function (Request $request) {
        return 'It works!!';
    })->name('admin.create');

    Route::post('edit', function (Request $request) {
        return 'It works!!';
    })->name('admin.update');
});
