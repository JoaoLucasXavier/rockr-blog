<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTimestamp = Carbon::now();

        $posts = [
            [
                'author' => 'Author 1',
                'title' => 'Neque porro quisquam est qui consectetur',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed neque varius, viverra ligula sed, tincidunt lectus. Suspendisse auctor ligula non faucibus commodo. Cras eget velit pulvinar, lacinia lacus at, consequat augue. Vivamus fringilla leo risus, bibendum semper dolor laoreet ut. In tempus risus in arcu commodo congue. Duis blandit velit leo, id imperdiet orci pellentesque ut. Morbi efficitur sit amet quam eu ornare. Phasellus est quam, volutpat eget leo vitae, venenatis maximus purus. Praesent risus orci, faucibus eget orci in, tempus semper purus. Sed rhoncus tempor risus nec imperdiet. Donec blandit ante ut ornare vulputate. Suspendisse pulvinar sem ac ipsum iaculis, in rutrum erat dignissim. Curabitur pellentesque felis mauris, ut pretium sem pharetra vulputate.

                            Phasellus nec risus in neque varius venenatis. Integer consequat feugiat turpis, nec consequat arcu. Nullam eget euismod velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu ultrices orci. Nam tincidunt ornare orci, et placerat sapien pretium tempus. Sed tempus tellus gravida, consectetur odio a, tincidunt enim. Ut eget leo tempor, gravida ligula dignissim, lobortis nunc. Cras gravida nisi tincidunt augue feugiat viverra. Integer quis semper quam.

                            Donec commodo sem sit amet metus lobortis aliquam. Nulla auctor dapibus est convallis malesuada. Aenean porttitor vitae eros non volutpat. Nullam metus quam, ullamcorper id luctus ac, lacinia eu orci. Duis sollicitudin id eros eu imperdiet. Integer et mi in erat bibendum efficitur. Phasellus cursus tellus dolor, eget facilisis neque luctus at. Praesent ut condimentum ante.',
                'image' => 'https://images.unsplash.com/photo-1609951735880-bcd4363630a6?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=656&q=80',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'author' => 'Author 2',
                'title' => 'Nqui dolorem ipsum quia dolor',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel ornare magna, in malesuada orci. Aenean facilisis, turpis ut eleifend condimentum, ante justo dictum odio, a hendrerit metus mauris nec felis. Duis eu enim sed ante feugiat bibendum vel dignissim metus. Aenean aliquam mauris sit amet magna congue, in finibus diam molestie. Suspendisse in lacinia eros, in commodo orci. Praesent porta pulvinar ligula non tristique. Fusce cursus venenatis enim id rhoncus. Nulla id orci quam. In vulputate aliquam tristique.

                            Duis in pellentesque felis. Nulla tempor pulvinar nibh tincidunt faucibus. Mauris hendrerit diam in orci ullamcorper, eget accumsan elit venenatis. Sed sed orci quis odio ullamcorper rhoncus. Suspendisse consequat vulputate lacus. Maecenas pretium metus quis ipsum congue, sit amet posuere sapien dictum. Pellentesque sed leo vel enim lacinia laoreet. Morbi odio turpis, dictum quis aliquet id, tempor eu libero. Nulla congue scelerisque semper. Integer interdum risus eu sapien tempus laoreet. Phasellus vitae libero in nisi elementum feugiat sit amet quis urna.',
                'image' => 'https://images.unsplash.com/photo-1598986646512-9330bcc4c0dc?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'author' => 'Author 3',
                'title' => 'Nconsectetur, adipisci velit',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus leo non ipsum vehicula elementum. Pellentesque dui risus, semper eu fermentum in, condimentum et tortor. In sit amet pharetra odio. Pellentesque dui ipsum, dapibus sed eros sit amet, mollis ornare dolor. Maecenas orci sapien, auctor ac elementum at, suscipit eu elit. Duis iaculis, libero ac imperdiet tincidunt, erat orci rutrum sapien, facilisis sodales dui turpis sed nunc. Phasellus tempus molestie nibh, et dapibus nulla elementum non. Sed sagittis lorem non sapien facilisis eleifend. Etiam sit amet tortor id ligula egestas sodales. Aliquam enim lorem, ultricies id nulla euismod, gravida gravida enim. Quisque vitae ipsum euismod, semper arcu finibus, efficitur felis.

                            Vestibulum volutpat, ligula quis accumsan porttitor, mi mi auctor metus, at ornare nulla erat ut augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin efficitur purus est, sed commodo urna tristique sed. Morbi egestas turpis vel mi commodo, ut sollicitudin urna maximus. Donec euismod mauris venenatis ex bibendum feugiat. Duis a ante in odio gravida tincidunt nec non libero. Phasellus mattis sapien libero, in porta erat tincidunt sit amet. Interdum et malesuada fames ac ante ipsum primis in faucibus.

                            Praesent vel placerat leo, ac lacinia nisl. Quisque luctus sapien tortor, ac congue ipsum pretium id. Cras sagittis diam sed est sodales dictum. In ac nulla at purus venenatis malesuada in vitae ligula. Proin ut urna leo. Vivamus vel arcu venenatis, suscipit lacus ac, auctor nulla. Nunc mi lorem, imperdiet blandit metus vitae, mattis pretium erat. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu egestas massa, sed congue purus.

Curabitur rhoncus, ante non rutrum sollicitudin, ligula ex mattis nisi, cursus pulvinar massa lorem sit amet nisi. Quisque et felis vitae nisi laoreet suscipit eget a magna. Pellentesque lacinia tempor tortor, vitae scelerisque turpis venenatis sit amet. Pellentesque vel leo vel enim imperdiet pulvinar non nec justo. Curabitur quis velit viverra, sagittis purus nec, lacinia sapien. Morbi lacinia ullamcorper mi quis semper. Donec enim turpis, pulvinar id malesuada id, varius nec enim. Mauris vitae ipsum condimentum, imperdiet lorem eu, lacinia erat. Phasellus nec elementum ligula, vel maximus tellus. Nunc finibus diam ut felis auctor, a ultricies massa congue.',
                'image' => 'https://images.unsplash.com/photo-1609342053792-5307f990bf6c?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=700&q=80',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'author' => 'Author 4',
                'title' => 'Nipsum quia dolor sit amet, consectetur, adipisci velit',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque efficitur urna, et sagittis est pellentesque sed. Curabitur vitae ex non risus semper fringilla. Sed porttitor, justo id rhoncus viverra, diam massa tristique felis, a pharetra velit sapien id massa. Sed porttitor ultricies leo, tristique convallis turpis fringilla nec. Nam fringilla, quam eget tristique consectetur, lectus ipsum venenatis odio, et ornare velit eros ac sem. Integer condimentum ex eu malesuada iaculis. Nam nec auctor quam. Cras sed turpis dui. Curabitur ornare odio et tortor commodo aliquet.

                            Aenean tellus mi, rutrum non odio nec, blandit faucibus metus. Proin eget interdum lacus. Nulla sagittis commodo libero, at varius erat aliquam ac. Integer a suscipit nisl. In tincidunt et quam sed facilisis. Praesent lacinia, nisl eu faucibus efficitur, tellus velit tristique odio, sed tincidunt felis libero a libero. Etiam maximus mauris commodo, vehicula nulla eget, commodo nisi. Mauris tortor felis, mollis vitae auctor sed, molestie et mi. Ut ac nisl eu urna auctor blandit. Quisque dapibus efficitur urna vel vestibulum. Nulla facilisi. Phasellus non odio vulputate, volutpat magna sit amet, laoreet mi. Morbi imperdiet, leo molestie hendrerit tempor, lorem massa consectetur magna, ut suscipit ipsum lectus vel purus. Cras sit amet vulputate sem. Nullam ac nulla tortor. Duis ac leo ac ligula lacinia ultricies ut eget lacus.',
                'image' => 'https://images.unsplash.com/photo-1608959077851-0e7e7cfd4b87?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=701&q=80',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'author' => 'Author 5',
                'title' => 'Neque porro quisquam',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vehicula dolor quis lacinia tincidunt. Maecenas tincidunt eu ipsum non dignissim. Nam facilisis fermentum convallis. Donec vehicula nec dui in eleifend. Mauris id felis urna. Morbi vel leo vehicula, convallis lacus volutpat, dapibus arcu. Maecenas imperdiet, sem in pellentesque porttitor, quam diam iaculis nibh, sed iaculis tellus ex mattis dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam congue tortor quis eros luctus, et sollicitudin neque volutpat. Aliquam erat volutpat. In quam ligula, viverra eu lorem et, sodales rhoncus lectus. Etiam sit amet ex eu arcu suscipit porttitor. Nulla cursus sem et velit viverra, quis ultrices risus vestibulum. Aliquam sagittis interdum elit nec lobortis. Nam consectetur velit non purus hendrerit, eu pulvinar erat rhoncus.

                            Donec at porta magna. Sed a orci sit amet mi tincidunt rutrum. Sed quis varius mauris. Vivamus scelerisque magna ullamcorper suscipit vestibulum. Maecenas fermentum vel augue sed interdum. Praesent vitae scelerisque odio, nec posuere mauris. Mauris neque nulla, sodales in egestas vitae, lobortis non erat. Donec id interdum tellus.',
                'image' => 'https://images.unsplash.com/photo-1604591259403-81d6c9cf87d7?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'author' => 'Author 6',
                'title' => 'Lorem Ipsum',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget gravida massa, a volutpat tortor. Integer pharetra diam ac ultrices elementum. Maecenas eget aliquam dolor. Duis maximus nulla ac consectetur interdum. Donec pretium porta est eget egestas. Proin convallis nibh id velit sollicitudin, tincidunt eleifend dui condimentum. Aliquam erat tellus, blandit quis velit vitae, euismod dictum magna. Quisque molestie nisl eu nisi scelerisque iaculis. Sed sit amet lectus nec enim finibus dapibus. Maecenas varius est at est auctor, ut mollis massa scelerisque.

                            Mauris a rutrum lorem. Phasellus at justo eu erat laoreet interdum eu quis ex. Nunc feugiat ultrices risus vitae condimentum. Nulla vel massa quis odio viverra tempor. Donec molestie eu orci ac finibus. In enim neque, laoreet varius fermentum pellentesque, ultricies luctus ex. Donec in nibh massa. Maecenas at ex tristique, iaculis leo eu, consequat ipsum. In hac habitasse platea dictumst. Maecenas luctus congue viverra. Pellentesque a enim vel neque aliquam semper non eget mauris. Aliquam vestibulum mauris sed sodales sollicitudin. Maecenas eu augue tincidunt, consequat sem non, condimentum mauris. Cras arcu est, iaculis at ullamcorper sed, ultrices sit amet massa. Integer sodales dictum odio, non fermentum nunc. Nullam a sapien ultrices elit viverra tincidunt et a odio.

                            Ut nec sollicitudin augue, quis condimentum nibh. Vestibulum sollicitudin augue sagittis ullamcorper tempor. Suspendisse bibendum ornare nibh, id mattis arcu pellentesque nec. Integer vitae mi tristique, accumsan nulla at, hendrerit lacus. Fusce porta tortor ac tellus sagittis suscipit. Proin luctus vestibulum consequat. Nulla mauris sapien, dignissim ac malesuada dignissim, pulvinar non nisi. Mauris ultricies aliquam augue tristique ullamcorper. Nulla sollicitudin metus purus, venenatis bibendum ex aliquet at. Quisque et sem quis ante convallis rhoncus at sed elit.',
                'image' => 'https://images.unsplash.com/photo-1608319256896-6b44bbcef66b?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=634&q=80',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'author' => 'Author 7',
                'title' => 'Who seeks after it and wants to have it, simply because it is pain',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis maximus ullamcorper. Praesent pellentesque ante sed lacus interdum viverra. Nullam condimentum tincidunt vehicula. Suspendisse metus dolor, interdum quis sem non, cursus vehicula dui. Pellentesque at ipsum urna. Phasellus a maximus est. Ut commodo, lorem luctus interdum vestibulum, quam velit aliquet mauris, quis elementum urna sem quis orci. Fusce convallis elementum leo, eu vestibulum nisl consectetur at. Cras sed orci egestas, malesuada magna vel, maximus erat. Aenean ultricies suscipit ante, ac lacinia quam sodales non. Curabitur id cursus lacus, sed mattis sem. Sed blandit nibh non nunc malesuada molestie ut at neque. Integer mollis eleifend eleifend.

                            Curabitur egestas velit et risus posuere, quis mollis magna rutrum. Vivamus faucibus consectetur dolor eu iaculis. Fusce aliquet feugiat congue. Nam sit amet urna vitae nunc placerat pharetra. Donec commodo enim in magna blandit ultricies. Sed condimentum a nibh id consequat. Quisque sit amet convallis purus, sed feugiat turpis. Aliquam aliquam faucibus nulla, vitae mollis erat tristique vitae. Aliquam sollicitudin, est in faucibus auctor, dolor magna venenatis magna, nec ullamcorper lacus mi maximus magna. Cras lorem magna, tempor at ipsum id, volutpat tincidunt libero. Maecenas eleifend vehicula urna at suscipit.

                            Vivamus porttitor in ipsum non pulvinar. Integer sit amet imperdiet elit. Duis vestibulum lobortis tellus in ultrices. Duis vitae tempus sem. Maecenas posuere nunc quis augue lacinia faucibus. Suspendisse in commodo sapien. Sed euismod, arcu eu vestibulum commodo, nulla leo imperdiet turpis, id placerat libero turpis id lorem. Aliquam orci urna, hendrerit quis erat id, congue bibendum eros. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec at lectus sed diam consequat placerat. Praesent vel odio iaculis nisl commodo volutpat. Quisque viverra ante consectetur nunc dictum, eu condimentum sem bibendum. Aenean tincidunt porttitor risus, vitae luctus dolor rutrum vel. Phasellus suscipit pellentesque sodales.',
                'image' => 'https://images.unsplash.com/photo-1607853202273-797f1c22a38e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=564&q=80',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'author' => 'Author 8',
                'title' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacus diam, malesuada eget cursus elementum, egestas scelerisque quam. Donec malesuada finibus est ut fermentum. Morbi mattis turpis ac lorem ornare aliquam. Nam lacus ante, euismod vitae lorem eu, ornare sodales magna. Nulla at lorem vitae massa pulvinar lobortis eu sit amet augue. In facilisis vulputate justo sed pretium. Mauris ipsum sem, consequat at dui vitae, ornare finibus lectus. Nulla ipsum turpis, interdum sed neque sed, faucibus dignissim metus. Etiam elementum sapien id risus mollis congue. Nam tristique, diam a pharetra finibus, enim nisl mattis mi, ut pulvinar odio sem ut ligula. Duis vel iaculis diam. Praesent augue enim, tincidunt in luctus a, blandit ac dui. Integer placerat porta facilisis. Vivamus rutrum, dui at tempus dignissim, eros erat interdum mauris, ac rutrum est lorem suscipit justo.

                            Sed fermentum, metus eget dapibus rhoncus, erat ante suscipit orci, id egestas metus est non metus. Integer accumsan commodo tristique. Pellentesque consequat dolor sed nunc blandit, ac vestibulum lacus blandit. Nunc est lectus, scelerisque sit amet dignissim vel, congue nec est. Quisque nec odio eget erat cursus tempus id non diam. Ut non lacinia enim, vitae bibendum felis. Etiam at felis pretium, convallis nunc egestas, malesuada est. Vivamus congue tellus efficitur, tincidunt diam aliquam, convallis mi. Vestibulum bibendum congue mi, tincidunt sollicitudin diam. Morbi et enim lorem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla venenatis efficitur justo vel ullamcorper. Morbi pharetra egestas lorem.',
                'image' => 'https://images.unsplash.com/photo-1609764465702-78599b1f1833?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'author' => 'Author 9',
                'title' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi auctor tristique blandit. Quisque nec odio leo. Morbi congue lectus ut justo egestas varius. In pulvinar finibus urna, id consectetur nisi aliquet vestibulum. Suspendisse potenti. Donec sit amet egestas magna. Mauris sed metus metus. Mauris efficitur leo eu ultrices rutrum. Maecenas vestibulum suscipit sapien eget pharetra. Nam condimentum enim eget velit porttitor placerat. Aenean vitae augue in nibh porta fringilla in vitae velit. Suspendisse suscipit lacus nisi, et porta enim aliquet eu. Sed vel vestibulum turpis. Etiam sit amet ex sapien. Integer pharetra lobortis metus varius dictum.

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mi est, malesuada ut justo in, consequat volutpat tortor. Vestibulum dictum porta leo vitae facilisis. Curabitur ultricies mi in massa tincidunt interdum. Suspendisse bibendum dui in lacinia euismod. Aliquam non aliquam orci, eu commodo est. Etiam tincidunt diam id commodo convallis. Quisque diam nisi, commodo ac augue quis, lacinia fermentum augue. In nec scelerisque eros. Morbi faucibus, diam non lacinia congue, odio est ullamcorper eros, a molestie libero libero in libero. Duis lectus nisi, aliquam ut posuere non, sagittis vel odio. Proin laoreet efficitur est molestie rutrum. In eget augue metus.

                            Cras sollicitudin nisl id erat accumsan fermentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque porttitor eu urna a feugiat. In malesuada, velit ac tincidunt consequat, nunc diam ullamcorper quam, ut viverra tellus nisi at nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque eget dui volutpat, condimentum mauris a, efficitur tortor.',
                'image' => 'https://images.unsplash.com/photo-1609911569319-ee785d107f24?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'author' => 'Author 10',
                'title' => 'consectetur adipiscing elit',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi auctor tristique blandit. Quisque nec odio leo. Morbi congue lectus ut justo egestas varius. In pulvinar finibus urna, id consectetur nisi aliquet vestibulum. Suspendisse potenti. Donec sit amet egestas magna. Mauris sed metus metus. Mauris efficitur leo eu ultrices rutrum. Maecenas vestibulum suscipit sapien eget pharetra. Nam condimentum enim eget velit porttitor placerat. Aenean vitae augue in nibh porta fringilla in vitae velit. Suspendisse suscipit lacus nisi, et porta enim aliquet eu. Sed vel vestibulum turpis. Etiam sit amet ex sapien. Integer pharetra lobortis metus varius dictum.

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mi est, malesuada ut justo in, consequat volutpat tortor. Vestibulum dictum porta leo vitae facilisis. Curabitur ultricies mi in massa tincidunt interdum. Suspendisse bibendum dui in lacinia euismod. Aliquam non aliquam orci, eu commodo est. Etiam tincidunt diam id commodo convallis. Quisque diam nisi, commodo ac augue quis, lacinia fermentum augue. In nec scelerisque eros. Morbi faucibus, diam non lacinia congue, odio est ullamcorper eros, a molestie libero libero in libero. Duis lectus nisi, aliquam ut posuere non, sagittis vel odio. Proin laoreet efficitur est molestie rutrum. In eget augue metus.

                            Cras sollicitudin nisl id erat accumsan fermentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque porttitor eu urna a feugiat. In malesuada, velit ac tincidunt consequat, nunc diam ullamcorper quam, ut viverra tellus nisi at nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque eget dui volutpat, condimentum mauris a, efficitur tortor.',
                'image' => 'https://images.unsplash.com/photo-1451847487946-99830706c22d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'author' => 'Author 11',
                'title' => 'Interdum et malesuada fames',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi auctor tristique blandit. Quisque nec odio leo. Morbi congue lectus ut justo egestas varius. In pulvinar finibus urna, id consectetur nisi aliquet vestibulum. Suspendisse potenti. Donec sit amet egestas magna. Mauris sed metus metus. Mauris efficitur leo eu ultrices rutrum. Maecenas vestibulum suscipit sapien eget pharetra. Nam condimentum enim eget velit porttitor placerat. Aenean vitae augue in nibh porta fringilla in vitae velit. Suspendisse suscipit lacus nisi, et porta enim aliquet eu. Sed vel vestibulum turpis. Etiam sit amet ex sapien. Integer pharetra lobortis metus varius dictum.

                            Cras sollicitudin nisl id erat accumsan fermentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque porttitor eu urna a feugiat. In malesuada, velit ac tincidunt consequat, nunc diam ullamcorper quam, ut viverra tellus nisi at nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque eget dui volutpat, condimentum mauris a, efficitur tortor.',
                'image' => 'https://images.unsplash.com/photo-1609434872742-ca703944e60d?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=700&q=80',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
        ];
        DB::table('posts')->insert($posts);
    }
}
