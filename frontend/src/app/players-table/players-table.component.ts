import { Component, OnInit } from '@angular/core';
import { Player } from '../domain__model/Player';
import { PlayerService } from '../services/player.service';

@Component({
  selector: 'app-players-table',
  templateUrl: './players-table.component.html',
  styleUrls: ['./players-table.component.scss']
})
export class PlayersTableComponent implements OnInit {

  players!: Array<Player>

  constructor(private playerService: PlayerService) { }

  ngOnInit(): void {
    this.playerService.getPlayers().subscribe(  
      (players: Array<Player>) => this.players = players
    )
  }

}
