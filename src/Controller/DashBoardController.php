<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Entity\Tweet;
use App\Model\Entity\TweetImage;
use App\Model\Entity\User;
use App\Model\Table\TweetsTable;
use Cake\Event\EventInterface;
use Cake\ORM\TableRegistry;
use Cake\Utility\Text;
use Twig\Profiler\Profile;

class DashBoardController extends AppController
{
    public function index()
    {
        /** @var User $user */
        $user = $this->Authentication->getIdentity();
        /** @var TweetsTable $tweetsTable */
        $tweetsTable = TableRegistry::getTableLocator()->get('Tweets');
        /** @var Profile $profile */

        if (
            $this->request->is('post')
        ) {
            $tweet = $this->saveTweet($user);
            $this->saveTweetImages($tweet);
        }

        $tweets = $this->paginate(
            $tweetsTable->query()->order(['Tweets.id' => 'DESC'])
                ->contain(['Users', 'TweetImages'])
                ->where(['user_id' => $user->id])
        );
        $this->set(['tweets' => $tweets]);
        $this->set(['user' => $user]);
    }

    private function saveTweet($user)
    {
        $tweetsTable = TableRegistry::getTableLocator()->get('Tweets');
        $body = $this->request->getData('body');
        $tweet = new Tweet();
        $tweet->body = $body;
        $tweet->user_id = $user->id;
        $tweetsTable->save($tweet);
        return $tweet;
    }

    private function saveTweetImages($tweet)
    {
        /** @var User $user */
        $user = $this->Authentication->getIdentity();
        if ($this->request->is('post')) {
            $file = $this->request->getData("file");
            if ($file != "undefind" && $file->getClientMediaType() != '') {
                $type = $file->getClientMediaType();
                $extension = '';
                switch ($type) {
                    case 'image/jpeg':
                        $extension = '.jpg';
                        break;
                    case 'image/png':
                        $extension = '.png';
                }
                $land = Text::uuid();
                $tweetImageTable = TableRegistry::getTableLocator()->get('TweetImages');
                $tweetImage = new TweetImage();
                $tweetImage->path = $land . $extension;
                $tweetImage->tweet_id = $tweet->id;
                $tweetImageTable->save($tweetImage);
                $filePath = WWW_ROOT . "/img/upload/tweet_images/" . $land . $extension;
                $file->moveTo($filePath);
//                ファイルのパス情報と、ツイートの紐付け用のIDを登録する
            }
        }
    }
}
