<?php $data = ['sound' => $newSound,
                    'country' => $record->country_name,
                    'genre' => $genre_,
                    'sound_order' => $orderSound
                ];
            
                $prepare = $pdo->prepare('INSERT INTO new_sounds (sound, country, genre, sound_order) VALUES (:sound, :country, :genre, :sound_order)');
                $exec = $prepare->execute($data);
?>